<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Category, Notification, Service};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ServiceManageController extends Controller
{
    //

    public function index(){
          if(Auth::guard('admin')->user()->type == "admin"){
                $services = Service::orderBy('id', 'desc')->get();
          }else{
                $services = Service::where('added_by', Auth::guard('admin')->user()->id)->orderBy('id', 'desc')->get();
          }

          return view('admin.service.all',compact('services'));
    }

    /**
     * Service Add.. 
    */

    public function add_page(){
          $categories = Category::where('type', 'service')->get();
          return view('admin.service.add', compact('categories'));
    }

    public function add_action(Request $request){
           $request->validate([
                'categories' => 'required|not_in:Select a Category',
                'title' => 'required|max:200',
                'img' => 'required|mimes:png,jpg,jpeg|max:2048',
           ]);

           /**
            * Upload Single Image 
           */

           $imageName = time().'.'.$request->img->extension();
           $request->img->move(public_path('admin/service/'), $imageName);

           // video upload
           if($request->hasFile('video')){
            $request->validate([
                  'video' => 'mimes:mp4|max:200000',
            ]);

            $videoName = time().'.'.$request->video->extension();
            $request->video->move(public_path('admin/service/video/'), $videoName);
            }else{
                    $videoName = null;
            }

          /**
           * Multiple Image Upload 
          */

          if($request->hasFile('gallaries')){
               foreach($request->gallaries as $gallery){
                  $galleryName[] = time().'_'.$gallery->getClientOriginalName();
                  $gallery->move(public_path('admin/service/gallery'), time().'_'.$gallery->getClientOriginalName());
                  $gn = implode(",", $galleryName);
               }
          }else{
                  $gn = null;
          }
          
          
        /**
        * Upload Single Image  2
        */

        if($request->hasFile('img2')){
            $request->validate([
                 'img2' => 'mimes:png,jpg,jpeg|max:2048',
            ]);
 
            // delete existing image & add new one
            // unlink(public_path('admin/service/').$service->img2);
            $imageName2 = time().'.'.$request->img2->extension();
            $request->img2->move(public_path('admin/service/'), $imageName2);
         }
         else{
            $imageName2 = null;
         }

          /**
           *  Add service.. 
          */

          $service = Service::create([
               'service_id' => Str::random(15),
               'added_by' => Auth::guard('admin')->user()->id,
               'title' => $request->title,
               'img' => $imageName,
               'category' => $request->categories,
               'gallery' => $gn,
               'description' => $request->description,
               'video' => $videoName,
               'status' => $request->status,
               
               // 

               'title2' => $request->title2,
               'img2' => $imageName2,
               'description2' => $request->description2,
               'y_video_link1' => str_replace("watch?v=", "embed/", $request->y_video_link1),
               'y_video_link2' => str_replace("watch?v=", "embed/", $request->y_video_link2),
          ]);

          // add notification if sub admin add a Page
          if(Auth::guard('admin')->user()->type == "sub_admin"){
            Notification::setNotifications(Auth::guard('admin')->user()->id, 'Add', 'Service', $service->id);
          }

          return redirect()->back()->with('success', 'Successfully Saved');
    }

    /**
     * Service Update  
    */

    public function update_page($id) {
           $service = Service::where('service_id',$id)->first();
           $categories = Category::where('type', 'service')->get();
           return view('admin.service.update', compact('service', 'categories'));
    }

    public function update_action(Request $request, $id){
        $request->validate([
            'categories' => 'required',
            'title' => 'required|max:200',
       ]);

       $service = Service::where('service_id',$id)->first();

        /**
            * Upload Single Image 
        */

        if($request->hasFile('img')){
           $request->validate([
                'img' => 'mimes:png,jpg,jpeg|max:2048',
           ]);

           // delete existing image & add new one
           unlink(public_path('admin/service/').$service->img);
           $imageName = time().'.'.$request->img->extension();
           $request->img->move(public_path('admin/service/'), $imageName);

           // add img details in db
           Service::where('service_id', $id)->update([
                  'img' => $imageName,
           ]);
        }
        
        
        /**
        * Upload Single Image  2
        */

        if($request->hasFile('img2')){
            $request->validate([
                 'img2' => 'mimes:png,jpg,jpeg|max:2048',
            ]);
 
            // delete existing image & add new one
            // unlink(public_path('admin/service/').$service->img2);
            $imageName2 = time().'.'.$request->img2->extension();
            $request->img2->move(public_path('admin/service2/'), $imageName2);
 
            // add img2 details in db
            Service::where('service_id', $id)->update([
                   'img2' => $imageName2,
            ]);
         }

        /**
         * Upload Video 
        */

        if($request->hasFile('video')){
            $request->validate([
                  'video' => 'mimes:mp4|max:200000',
            ]);

            // delete existing video
            unlink(public_path('admin/service/video/').$service->video);
            $videoName = time().'.'.$request->video->extension();
            $request->video->move(public_path('admin/service/video/'), $videoName);

            // add video details in db
            Service::where('service_id', $id)->update([
                'video' => $videoName,
            ]);
        }


        /**
           * Multiple Image Upload 
          */

        if($request->hasFile('gallaries')){
            foreach($request->gallaries as $gallery){
               $galleryName[] = time().'_'.$gallery->getClientOriginalName();
               $gallery->move(public_path('admin/service/gallery'), time().'_'.$gallery->getClientOriginalName());
               $gn = implode(",", $galleryName);
            }

            // delete existing images
            $exploded_imgs = explode(",", $service->gallery);
            foreach($exploded_imgs as $exp){
                 unlink(public_path('admin/service/gallery/').$exp);
            }

            // add video details in db
            Service::where('service_id', $id)->update([
                'gallery' => $gn,
            ]);
        }

        // Update Other details in db

        Service::where('service_id', $id)->update([
               'title' => $request->title,
               'category' => $request->categories,
               'description' => $request->description,
               'status' => $request->status,
               
               'title2' => $request->title2,
               'description2' => $request->description2,
               'y_video_link1' => str_replace("watch?v=", "embed/", $request->y_video_link1),
               'y_video_link2' => str_replace("watch?v=", "embed/", $request->y_video_link2),
        ]);

        // add notification if sub admin add a Page
        if(Auth::guard('admin')->user()->type == "sub_admin"){
            Notification::setNotifications(Auth::guard('admin')->user()->id, 'Update', 'Service', $service->id);
        }

        return redirect()->back()->with('success', 'Successfully Updated');

    }

    /**
     *  Service Delete 
    */

    public function delete($id) {
        $detail = Service::whereId($id)->first();
        
        // delete image
        unlink(public_path('admin/service/').$detail->img);

        // delete existing video
        unlink(public_path('admin/service/video/').$detail->video);

        // delete existing images
        $exploded_imgs = explode(",", $detail->gallery);
        foreach($exploded_imgs as $exp){
             unlink(public_path('admin/service/gallery/').$exp);
        }

        Service::find($id)->delete();
        return back()->with('error', 'Deleted');
    }
}