<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{WebsiteGallery, Notification};
use Illuminate\Support\Facades\Auth;

class GalleryManageController extends Controller
{
    //
    
    //
    public function list(){ 
        if(Auth::guard('admin')->user()->type == "sub_admin"){
           $galleries = WebsiteGallery::where('added_id', Auth::guard('admin')->user()->id)->get();
        }
        else{
            $galleries = WebsiteGallery::all();
        }
        
        return view('admin.gallery.list', compact('galleries'));
    }
    

    public function page(){
        return view('admin.gallery.page');
    }
    
    /**
     * Add Gallery 
    */

    public function add(Request $request){
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('admin/gallery'),$imageName);

        $gallery = WebsiteGallery::create([
              'added_by' => Auth::guard('admin')->user()->type,
              'added_id' => Auth::guard('admin')->user()->id,
              'img' => $imageName
        ]);

        // add notification if sub admin add a admin
        if(Auth::guard('admin')->user()->type == "sub_admin"){
            Notification::setNotifications(Auth::guard('admin')->user()->id, 'Add', 'Gallery', $gallery->id);
        }
        
        return response()->json(['success'=>$imageName]);
    }
    
    
    /**
     * delete
    */

    public function delete($id){
        $gallery = WebsiteGallery::whereId($id)->first();
        unlink(public_path('admin/gallery/'.$gallery->img));
        WebsiteGallery::find($id)->delete();
        return back()->with('error', 'Successfully Deleted.');
    }
    
    /**
     * update
    */

    public function update_page($id){
        $gallery = WebsiteGallery::whereId($id)->first();
        return view('admin.gallery.update_page', compact('gallery'));
    }

    public function update_page_action(Request $request, $id){
        $gallery = WebsiteGallery::whereId($id)->first();

        // delete the existing img from folder
        unlink(public_path('admin/gallery/'.$gallery->img));

        // add the new img
        $image = $request->file('img');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('admin/gallery'),$imageName);

        //update the details
        WebsiteGallery::whereId($id)->update([
            'img' => $imageName,
        ]);

        // add notification if sub admin add a admin
        if(Auth::guard('admin')->user()->type == "sub_admin"){
            Notification::setNotifications(Auth::guard('admin')->user()->id, 'Update', 'Gallery', $id);
        }
        
        return back()->with('gallery_update', 'Successfully Updated');
    }
}