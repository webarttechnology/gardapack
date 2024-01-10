<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteFoter;
use Illuminate\Http\Request;

class WebsiteFooterManageController extends Controller
{
    //

    public function page()
    {
        $footer = WebsiteFoter::first();
        return view('admin.website.footer_page', compact('footer'));
    }

    public function store(Request $request)
    {
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
        if ($request->hasFile('foot_img')) {
            $request->validate([
                'foot_img' => 'mimes:jpg,jpeg,png|max:2048'
            ]);

            $foot_img = time() . '.' . $request->foot_img->extension();
            $request->foot_img->move(public_path('uploads/foot_img/'), $foot_img);
        } else {
            if ($footer != null) {
                $foot_img = $footer->foot_img;
            } else {
                $foot_img = null;
            }
        }

        if ($request->hasFile('fb_image')) {
            $request->validate([
                'fb_image' => 'mimes:jpg,jpeg,png,svg|max:2048'
            ]);

            $fb_image = rand(2000, 3000) . time() . '.' . $request->fb_image->extension();
            $request->fb_image->move(public_path('uploads/social/'), $fb_image);
        } else {
            if ($footer != null) {
                $fb_image = $footer->fb_image;
            } else {
                $fb_image = null;
            }
        }
        if ($request->hasFile('twitter_image')) {
            $request->validate([
                'twitter_image' => 'mimes:jpg,jpeg,png,svg|max:2048'
            ]);

            $twitter_image = rand(2000, 3000) . time() . '.' . $request->twitter_image->extension();
            $request->twitter_image->move(public_path('uploads/social/'), $twitter_image);
        } else {
            if ($footer != null) {
                $twitter_image = $footer->twitter_image;
            } else {
                $twitter_image = null;
            }
        }
        if ($request->hasFile('goog_image')) {
            $request->validate([
                'goog_image' => 'mimes:jpg,jpeg,png,svg|max:2048'
            ]);

            $goog_image = rand(2000,3000) . time() . '.' . $request->goog_image->extension();
            $request->goog_image->move(public_path('uploads/social/'), $goog_image);
        } else {
            if ($footer != null) {
                $goog_image = $footer->goog_image;
            } else {
                $goog_image = null;
            }
        }
        if ($request->hasFile('pint_image')) {
            $request->validate([
                'pint_image' => 'mimes:jpg,jpeg,png,svg|max:2048'
            ]);

            $pint_image = rand(2000, 3000) . time() . '.' . $request->pint_image->extension();
            $request->pint_image->move(public_path('uploads/social/'), $pint_image);
        } else {
            if ($footer != null) {
                $pint_image = $footer->pint_image;
            } else {
                $pint_image = null;
            }
        }

        if ($footer == null) {
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
                'fb_image' => $fb_image,
                'twitter_image' => $twitter_image,
                'goog_image' => $goog_image,
                'pint_image' => $pint_image
            ]);
        } else {
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
                'fb_image' => $fb_image,
                'twitter_image' => $twitter_image,
                'goog_image' => $goog_image,
                'pint_image' => $pint_image
            ]);
        }

        return redirect()->back()->with('success', 'success');
    }
}
