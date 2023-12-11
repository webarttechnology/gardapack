<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ExtraManageController extends Controller
{
    //

    public function choose_page(){
          $data = DB::table('why_choose_us')->first();
          return view('admin.extra.choose_page', compact('data'));
    }

    public function choose_page_action(Request $request, $id){
        // store the img first

        $imgName = time().'.'.$request->img->extension();
        $request->img->move(public_path('admin/others/'), $imgName);

        DB::table('why_choose_us')->whereId($id)->update([
             'details' => $request->details,
             'reason_title_1' => $request->reason_title_1,
             'reason_1' => $request->reason_1,
             'reason_title_2' => $request->reason_title_2,
             'reason_2' => $request->reason_2,
             'reason_title_3' => $request->reason_title_3,
             'reason_3' => $request->reason_3,
             'img' => $imgName,
        ]);

        return redirect()->back()->with('success', 'saved successfully');
    }
}
