<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Settings, Notification};
use Illuminate\Support\Facades\Auth;


class AdminSettingsController extends Controller
{
    //

    public function settings_details($key)
    {
          $check = Settings::where('key', $key)->first();
        
        if($check == null){
                $details = "";
        }else{
                $details = $check;
        }
          
          return view('admin.settings.list', compact('key', 'details'));
    }

    public function add_page($key)
    {
          return view('admin.settings.add', compact('key'));
    }

    public function post_add(Request $request, $key)
    {
            if($request->type == "Text"){
                 $request->validate([
                        'text_value' => 'required|max:200',
                 ]);

                 Settings::create([
                        'key' => $key,
                        'input_type' => $request->type,
                        'value' => $request->text_value
                 ]);
            }
            else{
                 $request->validate([
                        'file_value' => 'required|mimes:jpg,jpeg,png|max:4800',
                 ]);

                 // upload logo
                 $imageName = time().'.'.$request->file_value->extension();
                 $request->file_value->move(public_path('settings/'.$key.'/'), $imageName);

                 // insert into db
                 Settings::create([
                        'key' => $key,
                        'input_type' => $request->type,
                        'value' => $imageName
                 ]);
            }
            
            return redirect(url('admin/settings/page', $key))->with('page_success', 'Data Saved successfully.');
    }


    public function update_page($id)
    {
           $details = Settings::whereId($id)->first();
           return view('admin.settings.update', compact('details'));
    }

    public function post_update(Request $request, $id)
    {
        $details = Settings::whereId($id)->first();

                // add notification if sub admin add a Settings

                if(Auth::guard('admin')->user()->type == "sub_admin"){
                     Notification::setNotifications(Auth::guard('admin')->user()->id, 'Update', 'Settings', $id);    
                }

            if($request->input_type == "Text"){
                  $request->validate([
                        'text_value' => 'required|max:200'
                  ]);

                  Settings::whereId($id)->update([
                        'value' => $request->text_value,
                  ]);

                  return redirect(url('admin/settings/page', $details->key))->with('page_success', 'Data Saved successfully.');

            }else{
                $request->validate([
                        'file_value' => 'mimes:jpg,jpeg,png|max:4800'
                ]);

                if($request->hasFile('file_value')){
                        // delete previous image from local folder
                        if($details->value != null){
                                unlink('settings/'.$details->key.'/'.$details->value);
                        }

                        // upload logo
                        $imageName = time().'.'.$request->file_value->extension();
                        $request->file_value->move(public_path('settings/'.$details->key.'/'), $imageName);

                        // update db
                        Settings::whereId($id)->update([
                                'value' => $imageName,
                        ]);

                    return redirect(url('admin/settings/page', $details->key))->with('page_success', 'Data Saved successfully.');

                }

                // return back()->with('page_success', 'Data Saved successfully.');

            }
    }
}