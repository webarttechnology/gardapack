<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Course, Notification};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CourseManageController extends Controller
{
    //

    public function add(){
           return view('admin.course.add');
    }
    
    public function add_action(Request $request){
           $request->validate([
                  'name' => 'required|max:200',
                  'img' => 'required',
                  'description' => 'required',
           ]);

           $slug = Str::slug($request->name, '-');

           /**
            * image upload
           */

           $imageName = time().'.'.$request->img->extension();
           $request->img->move(public_path('admin/course/img/'), $imageName);

           /**
            * video add
           */

           if($request->hasFile('video')){
            $request->validate([
                  'video' => 'mimes:mp4|max:200000',
            ]);

                    $videoName = time().'.'.$request->video->extension();
                    $request->video->move(public_path('admin/course/video/'), $videoName);
            }else{
                    $videoName = null;
            }

          /**
           * youtube video add
          */

          if($request->youtube_video != null){
                $youtube_v = str_replace("watch?v=", "embed/", $request->youtube_video);
          }else{
                $youtube_v = null;
          }

          // add all details in db

          $course = Course::create([
               'added_by' => Auth::guard('admin')->user()->id,
               'name' => $request->name,
               'description' => $request->description,
               'img' => $imageName,
               'video' => $videoName,
               'youtube_video' => $youtube_v,
               'slug' => $slug,
          ]);
          
          // add notification if sub admin add a admin
          if(Auth::guard('admin')->user()->type == "sub_admin"){
            Notification::setNotifications(Auth::guard('admin')->user()->id, 'Add', 'Course', $course->id);
          }

          return redirect()->back()->with('success', 'Successfully Added');
    }
    
    // list

    public function list(){
           $courses = Course::all();
           return view('admin.course.list', compact('courses'));
    }
    
    // delete
    public function delete($id){
        $course = Course::find($id);

        // delete the existing image
        unlink(public_path('admin/course/img/'.$course->img));

        // delete video if exists
        if($course->video != null){
             unlink(public_path("admin/course/video/".$course->video));
        }
        
        $course->delete();
        return redirect()->back()->with("delete", "Successfully Deleted");
    }
    
    // update
    public function update($id){
        $course = Course::where('id', $id)->first();
        return view('admin.course.update', compact('course'));
    }
    
    // update action
    public function update_action(Request $request, $id){
        $request->validate([
            'name' => 'required|max:200',
            'description' => 'required',
        ]);

       $course = Course::whereId($id)->first();
       $slug = Str::slug($request->name, '-');

     /**
      * image upload
     */

    if($request->hasFile('img')){
        if($course->img != null){
            unlink(public_path('admin/course/img/'.$course->img));
        }

        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('admin/course/img/'), $imageName);
    }else{
        $imageName = $course->img;
    }
     

     /**
      * video add
     */

     if($request->hasFile('video')){
            $request->validate([
                    'video' => 'mimes:mp4|max:200000',
            ]);

            if($course->video != null){
                 unlink(public_path('admin/course/video/'.$course->video));
            }

              $videoName = time().'.'.$request->video->extension();
              $request->video->move(public_path('admin/course/video/'), $videoName);
      }else{
              $videoName = $course->video;
      }

    /**
     * youtube video add
    */

    if($request->youtube_video != null){
          $youtube_v = str_replace("watch?v=", "embed/", $request->youtube_video);
    }else{
          $youtube_v = $course->youtube_video;
    }

    // add all details in db

    $course = Course::whereId($id)->update([
         'name' => $request->name,
         'description' => $request->description,
         'img' => $imageName,
         'video' => $videoName,
         'youtube_video' => $youtube_v,
         'slug' => $slug,
    ]);

    // add notification if sub admin add a admin
    if(Auth::guard('admin')->user()->type == "sub_admin"){
      Notification::setNotifications(Auth::guard('admin')->user()->id, 'Update', 'Course', $id);
    }

    return redirect()->back()->with('success', 'Successfully Updated');
    }
}