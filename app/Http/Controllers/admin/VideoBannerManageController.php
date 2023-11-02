<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class VideoBannerManageController extends Controller
{
    // 

    public function list(){
         $list = DB::table('video_banner')->first();
         return view('admin.video_banner.page', compact('list'));
    }

    public function update(Request $request, $id){
         $request->validate([
            'video_link' => 'required',
         ]);

         $video = str_replace("watch?v=", "embed/", $request->video_link);

         DB::table('video_banner')->where('id', $id)->update([
               'video_link' => $video,
         ]);

         return redirect()->back()->with('success', 'Successfully Updated');
    }
}
