<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{HomePge, Manual, Pages, Notification, Support, Technology, TermPolicy};
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
                    $data = Support::first();
                    return view('admin.pages.support', compact('data'));
                }
                
                else if($details->title == "shipping_term"){
                    $data = TermPolicy::whereType('shipping_term')->first();
                    $type="shipping_term";
                    return view('admin.pages.term_policy', compact('data', 'type'));
                }
                else if($details->title == "return_policy"){
                    $data = TermPolicy::whereType('return_policy')->first();
                    $type="return_policy";
                    return view('admin.pages.term_policy', compact('data', 'type'));
                }
                else if($details->title == "term_condition"){
                    $data = TermPolicy::whereType('term_condition')->first();
                    $type="term_condition";
                    return view('admin.pages.term_policy', compact('data', 'type'));
                }
                else if($details->title == "privacy_policy"){
                    $data = TermPolicy::whereType('privacy_policy')->first();
                    $type="privacy_policy";
                    return view('admin.pages.term_policy', compact('data', 'type'));
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

            $request->validate([
                 'circle1_text' => 'required',
                 'circle1_percent' => 'required|min:0|max:100',
                 'circle2_text' => 'required',
                 'circle2_percent' => 'required|min:0|max:100',
                 'circle3_text' => 'required',
                 'circle3_percent' => 'required|min:0|max:100',
                 'circle4_text' => 'required',
                 'circle4_percent' => 'required|min:0|max:100',
                 'circle5_text' => 'required',
                 'circle5_percent' => 'required|min:0|max:100',
            ]);

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

                    'contact_btn_title' => $request->contact_btn_title,
                    'contact_btn_link' => $request->contact_btn_link,
                    'circle1_text' => $request->circle1_text,
                    'circle1_percent' => $request->circle1_percent,
                    'circle2_text' => $request->circle2_text,
                    'circle2_percent' => $request->circle2_percent,
                    'circle3_text' => $request->circle3_text,
                    'circle3_percent' => $request->circle3_percent,
                    'circle4_text' => $request->circle4_text,
                    'circle4_percent' => $request->circle4_percent,
                    'circle5_text' => $request->circle5_text,
                    'circle5_percent' => $request->circle5_percent,
                    'description' => $request->description,
                    'extra_desc' => $request->extra_desc,
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