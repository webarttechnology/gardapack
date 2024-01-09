<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyManageController extends Controller
{
    //

    public function save(Request $request){
           $request->validate([
               'graph_title' => 'required',
               'graph_sub_title' => 'required',
               'graph_sub_sub_title' => 'required',
               'graph_footer_title' => 'required',
               'graph_footer_sub_title' => 'required',

               'technology_effect_title' => 'required',
    
               'prod_1_sku' => 'required',
               'prod_1_title' => 'required',
               'prod_1_short_desc' => 'required',
               'prod_1_spec' => 'required',

               'prod_2_sku' => 'required',
               'prod_2_title' => 'required',
               'prod_2_short_desc' => 'required',
               'prod_2_spec' => 'required',

               
               'prod_3_sku' => 'required',
               'prod_3_title' => 'required',
               'prod_3_short_desc' => 'required',
               'prod_3_spec' => 'required',

               'technology_effect2_title' => 'required',

               'feature_title' => 'required',
               'feature1' => 'required',
               'feature2' => 'required',
               'feature3' => 'required',
               'feature4' => 'required',
               'feature5' => 'required',


               'factor_title' => 'required',
               'factor_1_title' => 'required',
               'factor_1_short_desc' => 'required',

               'factor_2_title' => 'required',
               'factor_2_short_desc' => 'required',

               'factor_3_title' => 'required',
               'factor_3_short_desc' => 'required',

               'factor_4_title' => 'required',
               'factor_4_short_desc' => 'required',

               'approach_title' => 'required',
               'approach_1' => 'required',

               'approach_2' => 'required',

               'approach_3' => 'required',
           ]);

           $technology = Technology::first();
           if($technology == null){

            $request->validate([
                'technology_effect_img_1' => 'required|mimes:jpg,jpeg,png|max:2048',
                'technology_effect_img_2' => 'required|mimes:jpg,jpeg,png|max:2048',
                'prod_1_img' => 'required|mimes:jpg,jpeg,png|max:2048',
                'prod_2_img' => 'required|mimes:jpg,jpeg,png|max:2048',
                'prod_3_img' => 'required|mimes:jpg,jpeg,png|max:2048',
                'technology_effect2_img_1' => 'required|mimes:jpg,jpeg,png|max:2048',
               'technology_effect2_img_2' => 'required|mimes:jpg,jpeg,png|max:2048',
               'factor_1_img' => 'required|mimes:jpg,jpeg,png|max:2048',
               'factor_2_img' => 'required|mimes:jpg,jpeg,png|max:2048',
               'factor_3_img' => 'required|mimes:jpg,jpeg,png|max:2048',
               'factor_4_img' => 'required|mimes:jpg,jpeg,png|max:2048',
               'approach_1_img' => 'required|mimes:jpg,jpeg,png|max:2048',
               'approach_2_img' => 'required|mimes:jpg,jpeg,png|max:2048',
               'approach_3_img' => 'required|mimes:jpg,jpeg,png|max:2048',
            ]);

            /**
             * For Graph 
            */

            $graphData = []; 
            foreach ($request->graph_key as $key => $graphKey) {
                  $graphData[] = [
                      'key' => $graphKey,
                      'value1' => $request->graph_value1[$key],
                      'value2' => $request->graph_value2[$key],
                  ];
            }

            $prod_1_img = $this->uploadImage($request->file('prod_1_img'));
            $prod_2_img = $this->uploadImage($request->file('prod_2_img'));
            $prod_3_img = $this->uploadImage($request->file('prod_3_img'));
            $technology_effect_img_1 = $this->uploadImage($request->file('technology_effect_img_1'));
            $technology_effect_img_2 = $this->uploadImage($request->file('technology_effect_img_2'));
            $technology_effect2_img_1 = $this->uploadImage($request->file('technology_effect2_img_1'));
            $technology_effect2_img_2 = $this->uploadImage($request->file('technology_effect2_img_2'));
            $factor_1_img = $this->uploadImage($request->file('factor_1_img'));
            $factor_2_img = $this->uploadImage($request->file('factor_2_img'));
            $factor_3_img = $this->uploadImage($request->file('factor_3_img'));
            $factor_4_img = $this->uploadImage($request->file('factor_4_img'));
            $approach_1_img = $this->uploadImage($request->file('approach_1_img'));
            $approach_2_img = $this->uploadImage($request->file('approach_2_img'));
            $approach_3_img = $this->uploadImage($request->file('approach_3_img'));
               
               Technology::create([
                     'graph_title' => $request->graph_title,
                     'graph_sub_title' => $request->graph_sub_title,
                     'graph_sub_sub_title' => $request->graph_sub_sub_title,
                     'graph_footer_title' => $request->graph_footer_title,
                     'graph_footer_sub_title' => $request->graph_footer_sub_title,
                     'graph_data' => json_encode($graphData),
                     'technology_effect_title' => $request->technology_effect_title,
                     'technology_effect_img_1' => $technology_effect_img_1,
                     'technology_effect_img_2' => $technology_effect_img_2,
                     'prod_1_sku' => $request->prod_1_sku,
                     'prod_1_img' => $prod_1_img,
                     'prod_1_title' => $request->prod_1_title,
                     'prod_1_short_desc' => $request->prod_1_short_desc,
                     'prod_1_spec' => $request->prod_1_spec,

                     'prod_2_sku' => $request->prod_2_sku,
                     'prod_2_img' => $prod_2_img,
                     'prod_2_title' => $request->prod_2_title,
                     'prod_2_short_desc' => $request->prod_2_short_desc,
                     'prod_2_spec' => $request->prod_2_spec,

                     'prod_3_sku' => $request->prod_3_sku,
                     'prod_3_img' => $prod_3_img,
                     'prod_3_title' => $request->prod_3_title,
                     'prod_3_short_desc' => $request->prod_3_short_desc,
                     'prod_3_spec' => $request->prod_3_spec,

                     'technology_effect2_title' => $request->technology_effect2_title,
                     'technology_effect2_img_1' => $technology_effect2_img_1,
                     'technology_effect2_img_2' => $technology_effect2_img_2,

                     'feature_title' => $request->feature_title,
                     'feature1' => $request->feature1,
                     'feature2' => $request->feature2,
                     'feature3' => $request->feature3,
                     'feature4' => $request->feature4,
                     'feature5' => $request->feature5,

                     'factor_title' => $request->factor_title,
                     'factor_1_title' => $request->factor_1_title,
                     'factor_1_img' => $factor_1_img,
                     'factor_1_short_desc' => $request->factor_1_short_desc,

                     'factor_2_title' => $request->factor_2_title,
                     'factor_2_img' => $factor_2_img,
                     'factor_2_short_desc' => $request->factor_2_short_desc,

                     'factor_3_title' => $request->factor_3_title,
                     'factor_3_img' => $factor_3_img,
                     'factor_3_short_desc' => $request->factor_3_short_desc,

                     'factor_4_title' => $request->factor_4_title,
                     'factor_4_img' => $factor_4_img,
                     'factor_4_short_desc' => $request->factor_4_short_desc,

                     'approach_title' => $request->approach_title,
                     'approach_1' => $request->approach_1,
                     'approach_1_img' => $approach_1_img,

                     'approach_2' => $request->approach_2,
                     'approach_2_img' => $approach_2_img,

                     'approach_3' => $request->approach_3,
                     'approach_3_img' => $approach_3_img,
               ]);
           }else{

            $request->validate([
                'technology_effect_img_1' => 'mimes:jpg,jpeg,png|max:2048',
                'technology_effect_img_2' => 'mimes:jpg,jpeg,png|max:2048',
                'prod_1_img' => 'mimes:jpg,jpeg,png|max:2048',
                'prod_2_img' => 'mimes:jpg,jpeg,png|max:2048',
                'prod_3_img' => 'mimes:jpg,jpeg,png|max:2048',
                'technology_effect2_img_1' => 'mimes:jpg,jpeg,png|max:2048',
               'technology_effect2_img_2' => 'mimes:jpg,jpeg,png|max:2048',
               'factor_1_img' => 'mimes:jpg,jpeg,png|max:2048',
               'factor_2_img' => 'mimes:jpg,jpeg,png|max:2048',
               'factor_3_img' => 'mimes:jpg,jpeg,png|max:2048',
               'factor_4_img' => 'mimes:jpg,jpeg,png|max:2048',
               'approach_1_img' => 'mimes:jpg,jpeg,png|max:2048',
               'approach_2_img' => 'mimes:jpg,jpeg,png|max:2048',
               'approach_3_img' => 'mimes:jpg,jpeg,png|max:2048',
            ]);

            /**
             * For Graph 
            */

            $graphData = []; 
            foreach ($request->graph_key as $key => $graphKey) {
                  $graphData[] = [
                      'key' => $graphKey,
                      'value1' => $request->graph_value1[$key],
                      'value2' => $request->graph_value2[$key],
                  ];
            }


            $prod_1_img = ($request->hasFile('prod_1_img')) ? $this->uploadImage($request->file('prod_1_img')) : $technology->prod_1_img;
            $prod_2_img = ($request->hasFile('prod_2_img')) ? $this->uploadImage($request->file('prod_2_img')) : $technology->prod_2_img;
            $prod_3_img = ($request->hasFile('prod_3_img')) ? $this->uploadImage($request->file('prod_3_img')): $technology->prod_3_img;
            $technology_effect_img_1 = ($request->hasFile('technology_effect_img_1')) ? $this->uploadImage($request->file('technology_effect_img_1')): $technology->technology_effect_img_1;
            $technology_effect_img_2 = ($request->hasFile('technology_effect_img_2')) ? $this->uploadImage($request->file('technology_effect_img_2')): $technology->technology_effect_img_2;
            $technology_effect2_img_1 = ($request->hasFile('technology_effect2_img_1')) ? $this->uploadImage($request->file('technology_effect2_img_1')): $technology->technology_effect2_img_1;
            $technology_effect2_img_2 = ($request->hasFile('technology_effect2_img_2')) ? $this->uploadImage($request->file('technology_effect2_img_2')): $technology->technology_effect2_img_2;
            $factor_1_img = ($request->hasFile('factor_1_img')) ? $this->uploadImage($request->file('factor_1_img')): $technology->factor_1_img;
            $factor_2_img = ($request->hasFile('factor_2_img')) ? $this->uploadImage($request->file('factor_2_img')): $technology->factor_2_img;
            $factor_3_img = ($request->hasFile('factor_3_img')) ? $this->uploadImage($request->file('factor_3_img')): $technology->factor_3_img;
            $factor_4_img = ($request->hasFile('factor_4_img')) ? $this->uploadImage($request->file('factor_4_img')): $technology->factor_4_img;
            $approach_1_img = ($request->hasFile('approach_1_img')) ? $this->uploadImage($request->file('approach_1_img')): $technology->approach_1_img;
            $approach_2_img = ($request->hasFile('approach_2_img')) ? $this->uploadImage($request->file('approach_2_img')): $technology->approach_2_img;
            $approach_3_img = ($request->hasFile('approach_3_img')) ? $this->uploadImage($request->file('approach_3_img')): $technology->approach_3_img;
               
               Technology::first()->update([
                     'graph_title' => $request->graph_title,
                     'graph_sub_title' => $request->graph_sub_title,
                     'graph_sub_sub_title' => $request->graph_sub_sub_title,
                     'graph_footer_title' => $request->graph_footer_title,
                     'graph_footer_sub_title' => $request->graph_footer_sub_title,
                     'graph_data' => json_encode($graphData),
                     'technology_effect_title' => $request->technology_effect_title,
                     'technology_effect_img_1' => $technology_effect_img_1,
                     'technology_effect_img_2' => $technology_effect_img_2,
                     'prod_1_sku' => $request->prod_1_sku,
                     'prod_1_img' => $prod_1_img,
                     'prod_1_title' => $request->prod_1_title,
                     'prod_1_short_desc' => $request->prod_1_short_desc,
                     'prod_1_spec' => $request->prod_1_spec,

                     'prod_2_sku' => $request->prod_2_sku,
                     'prod_2_img' => $prod_2_img,
                     'prod_2_title' => $request->prod_2_title,
                     'prod_2_short_desc' => $request->prod_2_short_desc,
                     'prod_2_spec' => $request->prod_2_spec,

                     'prod_3_sku' => $request->prod_3_sku,
                     'prod_3_img' => $prod_3_img,
                     'prod_3_title' => $request->prod_3_title,
                     'prod_3_short_desc' => $request->prod_3_short_desc,
                     'prod_3_spec' => $request->prod_3_spec,

                     'technology_effect2_title' => $request->technology_effect2_title,
                     'technology_effect2_img_1' => $technology_effect2_img_1,
                     'technology_effect2_img_2' => $technology_effect2_img_2,

                     'feature_title' => $request->feature_title,
                     'feature1' => $request->feature1,
                     'feature2' => $request->feature2,
                     'feature3' => $request->feature3,
                     'feature4' => $request->feature4,
                     'feature5' => $request->feature5,

                     'factor_title' => $request->factor_title,
                     'factor_1_title' => $request->factor_1_title,
                     'factor_1_img' => $factor_1_img,
                     'factor_1_short_desc' => $request->factor_1_short_desc,

                     'factor_2_title' => $request->factor_2_title,
                     'factor_2_img' => $factor_2_img,
                     'factor_2_short_desc' => $request->factor_2_short_desc,

                     'factor_3_title' => $request->factor_3_title,
                     'factor_3_img' => $factor_3_img,
                     'factor_3_short_desc' => $request->factor_3_short_desc,

                     'factor_4_title' => $request->factor_4_title,
                     'factor_4_img' => $factor_4_img,
                     'factor_4_short_desc' => $request->factor_4_short_desc,

                     'approach_title' => $request->approach_title,
                     'approach_1' => $request->approach_1,
                     'approach_1_img' => $approach_1_img,

                     'approach_2' => $request->approach_2,
                     'approach_2_img' => $approach_2_img,

                     'approach_3' => $request->approach_3,
                     'approach_3_img' => $approach_3_img,
               ]);
           }

           return redirect()->back()->with('success', 'Data Successfully Updated');
    }

    private function uploadImage($image)
    {
        if ($image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/technology'), $imageName);
            return $imageName;
        }

        // If no image was uploaded, return null or an appropriate default value
        return null;
    }
}
