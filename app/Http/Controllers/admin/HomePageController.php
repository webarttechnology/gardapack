<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomePge;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function list()
    {
        $data = HomePge::first();
        return view('admin.pages.support', compact('data'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'meta_title' => 'required',
            'meta_description' => 'required',
            'banner_des' => 'required',

            'btn1_txt' => 'required',
            'btn2_txt' => 'required',
            'btn1_link' => 'required',
            'btn2_link' => 'required',

            'home_about_heading' => 'required',
            'home_about_des' => 'required',
            'home_about_video' => 'required',


            'feature_heading' => 'required',

            'feature_title_1' => 'required',
            'feature_description_1' => 'required',

            'feature_title_2' => 'required',
            'feature_description_2' => 'required',
            'feature_title_3' => 'required',
            'feature_description_3' => 'required',

            'feature_title_4' => 'required',
            'feature_description_4' => 'required',
            'feature_title_5' => 'required',
            'feature_description_5' => 'required',

            'offer_title_1' => 'required',
            'offer_subtitle_1' => 'required',
            'offer_title_2' => 'required',
            'offer_subtitle_2' => 'required',
            'explore_tech_heading' => 'required',
            'tech_title_1' => 'required',
            'technology_description_1' => 'required',
            'tech_title_2' => 'required',
            'technology_description_2' => 'required',
            'tech_title_3' => 'required',
            'technology_description_3' => 'required',
            'why_us_title_1' => 'required',
            'why_us_desc_1' => 'required',

            'why_us_title_2' => 'required',
            'why_us_desc_2' => 'required',
            'why_us_title_3' => 'required',
            'why_us_desc_3' => 'required',
            'why_us_title_4' => 'required',
            'why_us_desc_4' => 'required',
            'why_us_heading' => 'required',
        ];


        $request->validate($rules);

        try {
            //    $bannerPath = $request->file('banner')->storeAs('banners', time() . '_' . $request->file('banner')->getClientOriginalName(), 'public');

            $home = HomePge::first();

            /**
             * Add Banner
             */

            if ($request->hasFile('banner')) {
                $request->validate([
                    'banner' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $imageName = time() . '.' . $request->banner->extension();
                $request->banner->move(public_path('uploads/banners/'), $imageName);
            } else {
                if ($home != null) {
                    $imageName = $home->banner;
                } else {
                    $imageName = null;
                }
            }

            /**
             * Add Banner
             */

            if ($request->hasFile('feature_banner')) {
                $request->validate([
                    'feature_banner' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $feature_banner = time() . '.' . $request->feature_banner->extension();
                $request->feature_banner->move(public_path('uploads/feature_banners/'), $feature_banner);
            } else {
                if ($home != null) {
                    $feature_banner = $home->feature_banner;
                } else {
                    $feature_banner = null;
                }
            }

            /**
             * Feature Side Img
             */

            if ($request->hasFile('feature_side_img')) {
                $request->validate([
                    'feature_side_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $feature_side_img = time() . '.' . $request->feature_side_img->extension();
                $request->feature_side_img->move(public_path('uploads/feature_side_imgs/'), $feature_side_img);
            } else {
                if ($home != null) {
                    $feature_side_img = $home->feature_side_img;
                } else {
                    $feature_side_img = null;
                }
            }

            /**
             * Feature Image - 1
             */

            if ($request->hasFile('feature_img_1')) {
                $request->validate([
                    'feature_img_1' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $feature_img_1 = time() . '.' . $request->feature_img_1->extension();
                $request->feature_img_1->move(public_path('uploads/feature_img_1/'), $feature_img_1);
            } else {
                if ($home != null) {
                    $feature_img_1 = $home->feature_img_1;
                } else {
                    $feature_img_1 = null;
                }
            }

            /**
             * Feature Image - 2
             */

            if ($request->hasFile('feature_img_2')) {
                $request->validate([
                    'feature_img_2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $feature_img_2 = time() . '.' . $request->feature_img_2->extension();
                $request->feature_img_2->move(public_path('uploads/feature_img_2/'), $feature_img_2);
            } else {
                if ($home != null) {
                    $feature_img_2 = $home->feature_img_2;
                } else {
                    $feature_img_2 = null;
                }
            }

            /**
             * Feature Image - 3
             */

            if ($request->hasFile('feature_img_3')) {
                $request->validate([
                    'feature_img_3' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $feature_img_3 = time() . '.' . $request->feature_img_3->extension();
                $request->feature_img_3->move(public_path('uploads/feature_img_3/'), $feature_img_3);
            } else {
                if ($home != null) {
                    $feature_img_3 = $home->feature_img_3;
                } else {
                    $feature_img_3 = null;
                }
            }

            /**
             * Feature Image - 4
             */

            if ($request->hasFile('feature_img_4')) {
                $request->validate([
                    'feature_img_4' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $feature_img_4 = time() . '.' . $request->feature_img_4->extension();
                $request->feature_img_4->move(public_path('uploads/feature_img_4/'), $feature_img_4);
            } else {
                if ($home != null) {
                    $feature_img_4 = $home->feature_img_4;
                } else {
                    $feature_img_4 = null;
                }
            }


            /**
             * Feature Image - 5
             */

            if ($request->hasFile('feature_img_5')) {
                $request->validate([
                    'feature_img_5' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
                ]);

                $feature_img_5 = time() . '.' . $request->feature_img_5->extension();
                $request->feature_img_5->move(public_path('uploads/feature_img_5/'), $feature_img_5);
            } else {
                if ($home != null) {
                    $feature_img_5 = $home->feature_img_5;
                } else {
                    $feature_img_5 = null;
                }
            }

            /**
             * Offer Banner-1
             */

            if ($request->hasFile('offer_banner_1')) {
                $request->validate([
                    'offer_banner_1' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
                ]);

                $offer_banner_1 = time() . '.' . $request->offer_banner_1->extension();
                $request->offer_banner_1->move(public_path('uploads/offer_banner_1/'), $offer_banner_1);
            } else {
                if ($home != null) {
                    $offer_banner_1 = $home->offer_banner_1;
                } else {
                    $offer_banner_1 = null;
                }
            }

            /**
             * Offer Banner 2
             */

            if ($request->hasFile('offer_banner_2')) {
                $request->validate([
                    'offer_banner_2' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
                ]);

                $offer_banner_2 = time() . '.' . $request->offer_banner_2->extension();
                $request->offer_banner_2->move(public_path('uploads/offer_banner_2/'), $offer_banner_2);
            } else {
                if ($home != null) {
                    $offer_banner_2 = $home->offer_banner_2;
                } else {
                    $offer_banner_2 = null;
                }
            }

            /**
             * Explore Tech Banner
             */

            if ($request->hasFile('explore_tech_banner')) {
                $request->validate([
                    'explore_tech_banner' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $explore_tech_banner = time() . '.' . $request->explore_tech_banner->extension();
                $request->explore_tech_banner->move(public_path('uploads/explore_tech_banner/'), $explore_tech_banner);
            } else {
                if ($home != null) {
                    $explore_tech_banner = $home->explore_tech_banner;
                } else {
                    $explore_tech_banner = null;
                }
            }

            /**
             * Tech Image - 1
             */

            if ($request->hasFile('tech_img_1')) {
                $request->validate([
                    'tech_img_1' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $tech_img_1 = time() . '.' . $request->tech_img_1->extension();
                $request->tech_img_1->move(public_path('uploads/tech_img_1/'), $tech_img_1);
            } else {
                if ($home != null) {
                    $tech_img_1 = $home->tech_img_1;
                } else {
                    $tech_img_1 = null;
                }
            }

            /**
             * Tech Image - 2
             */

            if ($request->hasFile('tech_img_2')) {
                $request->validate([
                    'tech_img_2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $tech_img_2 = time() . '.' . $request->tech_img_2->extension();
                $request->tech_img_2->move(public_path('uploads/tech_img_2/'), $tech_img_2);
            } else {
                if ($home != null) {
                    $tech_img_2 = $home->tech_img_2;
                } else {
                    $tech_img_2 = null;
                }
            }

            /**
             * Tech Image - 3
             */

            if ($request->hasFile('tech_img_3')) {
                $request->validate([
                    'tech_img_3' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $tech_img_3 = time() . '.' . $request->tech_img_3->extension();
                $request->tech_img_3->move(public_path('uploads/tech_img_3/'), $tech_img_3);
            } else {
                if ($home != null) {
                    $tech_img_3 = $home->tech_img_3;
                } else {
                    $tech_img_3 = null;
                }
            }

            /**
             * Why US - 1
             */

            if ($request->hasFile('why_us_img_1')) {
                $request->validate([
                    'why_us_img_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $why_us_img_1 = time() . '.' . $request->why_us_img_1->extension();
                $request->why_us_img_1->move(public_path('uploads/why_us_img_1/'), $why_us_img_1);
            } else {
                if ($home != null) {
                    $why_us_img_1 = $home->why_us_img_1;
                } else {
                    $why_us_img_1 = null;
                }
            }

            /**
             * why us - 2
             */

            if ($request->hasFile('why_us_img_2')) {
                $request->validate([
                    'why_us_img_2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $why_us_img_2 = time() . '.' . $request->why_us_img_2->extension();
                $request->why_us_img_2->move(public_path('uploads/why_us_img_2/'), $why_us_img_2);
            } else {
                if ($home != null) {
                    $why_us_img_2 = $home->why_us_img_2;
                } else {
                    $why_us_img_2 = null;
                }
            }

            /**
             * Tech Image - 1
             */

            if ($request->hasFile('why_us_img_3')) {
                $request->validate([
                    'why_us_img_3' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $why_us_img_3 = time() . '.' . $request->why_us_img_3->extension();
                $request->why_us_img_3->move(public_path('uploads/why_us_img_3/'), $why_us_img_3);
            } else {
                if ($home != null) {
                    $why_us_img_3 = $home->why_us_img_3;
                } else {
                    $why_us_img_3 = null;
                }
            }

            /**
             * Tech Image - 1
             */

            if ($request->hasFile('why_us_img_4')) {
                $request->validate([
                    'why_us_img_4' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $why_us_img_4 = time() . '.' . $request->why_us_img_4->extension();
                $request->why_us_img_4->move(public_path('uploads/why_us_img_4/'), $why_us_img_4);
            } else {
                if ($home != null) {
                    $why_us_img_4 = $home->why_us_img_4;
                } else {
                    $why_us_img_4 = null;
                }
            }

            /**
             * Faq Banner
             */

            if ($request->hasFile('faq_banner')) {
                $request->validate([
                    'faq_banner' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $faq_banner = time() . '.' . $request->faq_banner->extension();
                $request->faq_banner->move(public_path('uploads/faq_banner/'), $faq_banner);
            } else {
                if ($home != null) {
                    $faq_banner = $home->faq_banner;
                } else {
                    $faq_banner = null;
                }
            }


            if ($home == null) {
                HomePge::create([
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'banner' => $imageName,
                    'banner_des' => $request->banner_des,

                    'btn1_txt' => $request->btn1_txt,
                    'btn2_txt' => $request->btn2_txt,
                    'btn1_link' => $request->btn1_link,
                    'btn2_link' => $request->btn2_link,

                    'home_about_heading' => $request->home_about_heading,
                    'home_about_des' => $request->home_about_des,
                    'home_about_video' =>  $request->home_about_video,

                    'feature_heading' =>  $request->feature_heading,
                    'feature_banner' =>  $feature_banner,
                    'feature_side_img' =>  $feature_side_img,

                    'feature_img_1' =>  $feature_img_1,
                    'feature_title_1' =>  $request->feature_title_1,
                    'feature_description_1' =>  $request->feature_description_1,

                    'feature_img_2' =>  $feature_img_2,
                    'feature_title_2' =>  $request->feature_title_2,
                    'feature_description_2' =>  $request->feature_description_2,

                    'feature_img_3' =>  $feature_img_3,
                    'feature_title_3' =>  $request->feature_title_3,
                    'feature_description_3' =>  $request->feature_description_3,

                    'feature_img_4' =>  $feature_img_4,
                    'feature_title_4' =>  $request->feature_title_4,
                    'feature_description_4' =>  $request->feature_description_4,

                    'feature_img_5' =>  $feature_img_5,
                    'feature_title_5' =>  $request->feature_title_5,
                    'feature_description_5' =>  $request->feature_description_5,

                    'offer_title_1' =>  $request->offer_title_1,
                    'offer_subtitle_1' =>  $request->offer_subtitle_1,
                    'offer_banner_1' =>  $offer_banner_1,
                    'offer_link_1' =>  $request->offer_link_1,

                    'offer_title_2' =>  $request->offer_title_2,
                    'offer_subtitle_2' =>  $request->offer_subtitle_2,
                    'offer_banner_2' =>  $offer_banner_2,
                    'offer_link_2' =>  $request->offer_link_2,

                    'explore_tech_heading' =>  $request->explore_tech_heading,
                    'explore_tech_banner' =>  $explore_tech_banner,

                    'tech_title_1' =>  $request->tech_title_1,
                    'tech_img_1' =>  $tech_img_1,
                    'technology_description_1' =>  $request->technology_description_1,

                    'tech_title_2' =>  $request->tech_title_2,
                    'tech_img_2' =>  $tech_img_2,
                    'technology_description_2' =>  $request->technology_description_2,

                    'tech_title_3' =>  $request->tech_title_3,
                    'tech_img_3' =>  $tech_img_3,
                    'technology_description_3' =>  $request->technology_description_3,

                    'why_us_title_1' =>  $request->why_us_title_1,
                    'why_us_img_1' =>  $request->why_us_img_1,
                    'why_us_desc_1' =>  $request->why_us_desc_1,

                    'why_us_title_2' =>  $request->why_us_title_2,
                    'why_us_img_2' =>  $request->why_us_img_2,
                    'why_us_desc_2' =>  $request->why_us_desc_2,

                    'why_us_title_3' =>  $request->why_us_title_3,
                    'why_us_img_3' =>  $request->why_us_img_3,
                    'why_us_desc_3' =>  $request->why_us_desc_3,

                    'why_us_title_4' =>  $request->why_us_title_4,
                    'why_us_img_4' =>  $request->why_us_img_4,
                    'why_us_desc_4' =>  $request->why_us_desc_4,

                    'why_us_heading' =>  $request->why_us_heading,

                    'faq_banner' =>  $faq_banner,
                ]);
            } else {
                HomePge::first()->update([
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'banner' => $imageName,
                    'banner_des' => $request->banner_des,

                    'btn1_txt' => $request->btn1_txt,
                    'btn2_txt' => $request->btn2_txt,
                    'btn1_link' => $request->btn1_link,
                    'btn2_link' => $request->btn2_link,

                    'home_about_heading' => $request->home_about_heading,
                    'home_about_des' => $request->home_about_des,
                    'home_about_video' =>  $request->home_about_video,

                    'feature_heading' =>  $request->feature_heading,
                    'feature_banner' =>  $feature_banner,
                    'feature_side_img' =>  $feature_side_img,

                    'feature_img_1' =>  $feature_img_1,
                    'feature_title_1' =>  $request->feature_title_1,
                    'feature_description_1' =>  $request->feature_description_1,

                    'feature_img_2' =>  $feature_img_2,
                    'feature_title_2' =>  $request->feature_title_2,
                    'feature_description_2' =>  $request->feature_description_2,

                    'feature_img_3' =>  $feature_img_3,
                    'feature_title_3' =>  $request->feature_title_3,
                    'feature_description_3' =>  $request->feature_description_3,

                    'feature_img_4' =>  $feature_img_4,
                    'feature_title_4' =>  $request->feature_title_4,
                    'feature_description_4' =>  $request->feature_description_4,

                    'feature_img_5' =>  $feature_img_5,
                    'feature_title_5' =>  $request->feature_title_5,
                    'feature_description_5' =>  $request->feature_description_5,

                    'offer_title_1' =>  $request->offer_title_1,
                    'offer_subtitle_1' =>  $request->offer_subtitle_1,
                    'offer_banner_1' =>  $offer_banner_1,
                    'offer_title_2' =>  $request->offer_title_2,
                    'offer_subtitle_2' =>  $request->offer_subtitle_2,
                    'offer_banner_2' =>  $offer_banner_2,

                    'explore_tech_heading' =>  $request->explore_tech_heading,
                    'explore_tech_banner' =>  $explore_tech_banner,

                    'tech_title_1' =>  $request->tech_title_1,
                    'tech_img_1' =>  $tech_img_1,
                    'technology_description_1' =>  $request->technology_description_1,

                    'tech_title_2' =>  $request->tech_title_2,
                    'tech_img_2' =>  $tech_img_2,
                    'technology_description_2' =>  $request->technology_description_2,

                    'tech_title_3' =>  $request->tech_title_3,
                    'tech_img_3' =>  $tech_img_3,
                    'technology_description_3' =>  $request->technology_description_3,

                    'why_us_title_1' =>  $request->why_us_title_1,
                    'why_us_img_1' =>  $request->why_us_img_1,
                    'why_us_desc_1' =>  $request->why_us_desc_1,

                    'why_us_title_2' =>  $request->why_us_title_2,
                    'why_us_img_2' =>  $request->why_us_img_2,
                    'why_us_desc_2' =>  $request->why_us_desc_2,

                    'why_us_title_3' =>  $request->why_us_title_3,
                    'why_us_img_3' =>  $request->why_us_img_3,
                    'why_us_desc_3' =>  $request->why_us_desc_3,

                    'why_us_title_4' =>  $request->why_us_title_4,
                    'why_us_img_4' =>  $request->why_us_img_4,
                    'why_us_desc_4' =>  $request->why_us_desc_4,

                    'faq_banner' =>  $faq_banner,
                    'offer_link_1' =>  $request->offer_link_1,
                    'offer_link_2' =>  $request->offer_link_2,

                    'why_us_heading' =>  $request->why_us_heading,
                ]);
            }

            return redirect()->back()->with('success', 'Data Successfully Updated');
            // return redirect()->route('admin.home.list')->with('success', 'Successfully Saved');
        } catch (\Exception $e) {
            // Handle any exceptions (e.g., file upload failure)
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    public function update(Request $request, $id)
    {
        $data =  HomePge::find($id);
        $data->update([
            'page_heading' => $request->page_heading,
            'page_des' => $request->page_des,
            'email' => $request->email,
            'phone' => $request->phone,
            'live_chat' => $request->live_chat,
        ]);

        return redirect()->route('admin.home.list')->with('success', 'Successfully Saved');
    }
}
