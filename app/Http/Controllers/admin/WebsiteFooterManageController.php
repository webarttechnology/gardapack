<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteFoter;
use Illuminate\Http\Request;

class WebsiteFooterManageController extends Controller
{
    //

    public function page(){
         $footer = WebsiteFoter::first();
         return view('admin.website.footer_page', compact('footer'));
    }

    public function store(Request $request){
           $request->validate([
                'footer_desc' => 'required',
                'fb_link' => 'required',
                'fb_status' => 'required',
                'twitter_link' => 'required',
                'twitter_status' => 'required',
                'goog_link' => 'required',
                'goog_status' => 'required',
                'pint_link' => 'required',
                'pint_status' => 'required',
                'copy_right_text' => 'required',
           ]);

           $footer = WebsiteFoter::first();
           if($request->hasFile('foot_img')){
                $request->validate([
                    'foot_img' => 'mimes:jpg,jpeg,png|max:2048'
                ]);

                $foot_img = time().'.'.$request->foot_img->extension();
                $request->foot_img->move(public_path('uploads/foot_img/'), $foot_img);
           }else{
               if($footer != null){
                  $foot_img = $footer->foot_img;
               }else{
                  $foot_img = null;
               }
           }

           if($footer == null){
                WebsiteFoter::create([
                    'footer_desc' => $request->footer_desc,
                    'fb_link' => $request->fb_link,
                    'fb_status' => $request->fb_status,
                    'twitter_link' => $request->twitter_link,
                    'twitter_status' => $request->twitter_status,
                    'goog_link' => $request->goog_link,
                    'goog_status' => $request->goog_status,
                    'pint_link' => $request->pint_link,
                    'pint_status' => $request->pint_status,
                    'copy_right_text' => $request->copy_right_text,
                    'foot_img' => $foot_img,
                ]);
           }else{
                WebsiteFoter::first()->update([
                    'footer_desc' => $request->footer_desc,
                    'fb_link' => $request->fb_link,
                    'fb_status' => $request->fb_status,
                    'twitter_link' => $request->twitter_link,
                    'twitter_status' => $request->twitter_status,
                    'goog_link' => $request->goog_link,
                    'goog_status' => $request->goog_status,
                    'pint_link' => $request->pint_link,
                    'pint_status' => $request->pint_status,
                    'copy_right_text' => $request->copy_right_text,
                    'foot_img' => $foot_img,
                ]);
           }

           return redirect()->back()->with('success', 'success');
    }
}
