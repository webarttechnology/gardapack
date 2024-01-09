<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{HomePge, Pages, Notification, Support, Technology};
use Illuminate\Support\Facades\Auth;

class AdminPagesController extends Controller
{
    //

    public function pages_lists()
    {
           $pages = Pages::orderBy('id', 'desc')->get();
           return view('admin.pages.lists', compact('pages'));
    }

    public function admin_add_pages()
    {
           return view('admin.pages.add');
    }

    public function update_pages($id)
    {
          $details = Pages::whereId($id)->first();
          if($details->title != "technology"){
                if($details->title == "home"){
                    $data = HomePge::first();
                    return view('admin.pages.home', compact('data'));
                }
                else if($details->title == "support"){
                    // return redirect()->route('admin.support.list');
                    $data = Support::first();
                    return view('admin.pages.support', compact('data'));
                }
                else{
                    return view('admin.pages.update', compact('details'));
                }
          }
          
          if($details->title == "technology"){
              $technology = Technology::first();
              return view('admin.pages.technology', compact('technology'));
          }
    }

    public function admin_save_pages(Request $request)
    {

            // $request->validate([
            //      'name' => 'required|max:200',
            //      'title' => 'required|max:200',
            //      'description' => 'required',
            // ]);

            $id = $request->id;

            // update code goes here..
            if($id != "0"){
                //  if, featured Img has image
                if($request->hasFile('featured_img')){
                    $request->validate([
                        'featured_img' => 'image|mimes:jpeg,png,jpg|max:2048',
                    ]);

                    // fetch details of the page from db
                    $fetch = Pages::whereId($id)->first();
                   
                    /*
                         If, old featured Image is present in db, old image will be deleted from local file
                         and upload new image, otherwise new featured image will be uploaded.
                    */

                    if($fetch->featured_img != null){
                           unlink("pages/featured_img/".$fetch->featured_img);
                    }
                   
                    // upload featured image
                    $imageName = time().'.'.$request->featured_img->extension();
                    $request->featured_img->move(public_path('pages/featured_img/'), $imageName);

                    Pages::whereId($id)->update([
                        'name' => $request->name,
                        'title' => $request->title,
                        'featured_img' => $imageName,
                        'description' => $request->description,
                     ]);
                }

                //  if, featured Img doesn't have any image

                // else{
                    
                 // fetch details of the page from db
                    $fetch = Pages::whereId($id)->first();

                // img2 
                if($request->hasFile('img2')){
                    // upload featured image
                    $imageName2 = time().'.'.$request->img2->extension();
                    $request->img2->move(public_path('pages/img2/'), $imageName2);
                }else{
                    $imageName2 = $fetch->img2;
                }

                 // img3
                 if($request->hasFile('img3')){
                    // upload featured image
                    $imageName3 = time().'.'.$request->img3->extension();
                    $request->img3->move(public_path('pages/img3/'), $imageName3);
                }else{
                    $imageName3 = $fetch->img3;
                }

                // img4
                if($request->hasFile('img4')){
                    // upload featured image
                    $imageName4 = time().'.'.$request->img4->extension();
                    $request->img4->move(public_path('pages/img4/'), $imageName4);
                }else{
                    $imageName4 = $fetch->img4;
                }

                // img3
                if($request->hasFile('img5')){
                    // upload featured image
                    $imageName5 = time().'.'.$request->img5->extension();
                    $request->img5->move(public_path('pages/img5/'), $imageName5);
                }else{
                    $imageName5 = $fetch->img5;
                }
                
                
                 Pages::whereId($id)->update([
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'name' => $request->name,
                    'title' => $request->title,
                    'description' => $request->description,
                    
                    //

                    'address' => $request->address,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    // 'map_link' => $request->map_link,
                    
                    //
                    'img2' => $imageName2,
                    'img3' => $imageName3,
                    'img4' => $imageName4,
                    'img5' => $imageName5,
                    'description2' => $request->description2,
                    'description3' => $request->description3,
                    'description4' => $request->description4,
                    'description5' => $request->description5,
                    
                    'youtube_link1' => str_replace("watch?v=", "embed/", $request->youtube_link1),
                    'youtube_link2' => str_replace("watch?v=", "embed/", $request->youtube_link2),

                    'text3' => $request->text3,
                    'text4' => $request->text4,
                    'text5' => $request->text5,
                    'description6' => $request->description6,
                    'how_work_text1' => $request->how_work_text1,
                    'how_work_text2' => $request->how_work_text2,
                    'how_work_text3' => $request->how_work_text3,
                    'how_work_text4' => $request->how_work_text4,
                    'how_work_desc1' => $request->how_work_desc1,
                    'how_work_desc2' => $request->how_work_desc2,
                    'how_work_desc3' => $request->how_work_desc3,
                    'how_work_desc4' => $request->how_work_desc4,
                    'feature_heading' => $request->feature_heading,
                    'how_work_heading' => $request->how_work_heading,
                 ]);
            //   }

                // add notification if sub admin add a Page
                if(Auth::guard('admin')->user()->type == "sub_admin"){
                    Notification::setNotifications(Auth::guard('admin')->user()->id, 'Update', 'Page', $id);
                }
            }

            // create code goes here..
            else{
                // if, featured Img has image
                if($request->hasFile('featured_img')){
                    $request->validate([
                        'featured_img' => 'image|mimes:jpeg,png,jpg|max:2048',
                    ]);

                    // upload featured image
                    $imageName = time().'.'.$request->featured_img->extension();
                    $request->featured_img->move(public_path('pages/featured_img/'), $imageName);

                    $page = Pages::create([
                        'name' => $request->name,
                        'title' => $request->title,
                        'featured_img' => $imageName,
                        'description' => $request->description,
                    ]);

                }
                else{
                    Pages::create([
                        'name' => $request->name,
                        'title' => $request->title,
                        'description' => $request->description,
                    ]);
                }

                // add notification if sub admin add a admin
                if(Auth::guard('admin')->user()->type == "sub_admin"){
                    Notification::setNotifications(Auth::guard('admin')->user()->id, 'Add', 'Page', $page->id);
                }
           }

            return back()->with('page_success', 'Data Saved successfully.');
    }

    public function delete_pages($id)
    {
            Pages::find($id)->delete();
            return back()->with('page_delete', 'Deleted.');
    }
}