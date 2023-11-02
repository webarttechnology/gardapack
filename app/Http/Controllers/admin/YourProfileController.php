<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class YourProfileController extends Controller
{
    //

    public function your_profile()
    {
            $details = Admin::whereId(Auth::guard('admin')->user()->id)->first();
            return view('admin.your_profile.view', compact('details'));
    }

    public function save_profile(Request $request, $type)
    {
           /*
                  If, $type = details, then only profile details will updated..
                  otherwise profile image will updated
           */

           $id = Auth::guard('admin')->user()->id;

           if($type == "details"){
                 $request->validate([
                    'first_name' => 'required|max:200',
                    'last_name' => 'required|max:200',
                    'email' => 'required|email|unique:users|max:200', 
                 ]);

                 Admin::whereId($id)->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                 ]);

                return back()->with('profile_save', 'Saved successfully.');

           }
           else{
                $request->validate([
                    'profile_img' => 'required|mimes:jpg,jpeg,png|max:2400',
                ]);

                $details = Admin::whereId($id)->first();
                if($details->profile_img != null){
                        unlink("admin/profile_img/".$details->profile_img);
                }

                // upload featured image
                $imageName = time().'.'.$request->profile_img->extension();
                $request->profile_img->move(public_path('admin/profile_img/'), $imageName);

                // save in db
                Admin::whereId($id)->update([
                      'profile_img' => $imageName,
                ]);

                return back()->with('profile_save', 'Saved successfully.');

           }
    }

    public function select_profile_img()
    {
          $id = Auth::guard('admin')->user()->id;
          $details = Admin::whereId($id)->first();
          return view('admin.your_profile.profile_img', compact('details'));
    }
}
