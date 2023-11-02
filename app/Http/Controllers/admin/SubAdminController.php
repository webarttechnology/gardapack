<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Admin, Notification};
use Illuminate\Support\Facades\Auth;


class SubAdminController extends Controller
{
    //

    public function admin_lists()
    {
        if(Auth::guard('admin')->user()->type == "admin"){
           $lists = Admin::whereType('sub_admin')->orderBy('id', 'desc')->get();
        }else{
          $lists = Admin::whereEmail(Auth::guard('admin')->user()->email)->orderBy('id', 'desc')->get();
        }

           return view('admin.sub_admin.lists', compact('lists'));
    }

    /*
           function for add and update page redirection for sub-admins
    */

    public function admin_save($page, $id)
    {
            if($page == "add"){
                  $details = '';
            }
            else{
                 $details = Admin::whereId($id)->first();
            }

            return view('admin.sub_admin.save', compact('page', 'details'));
    }

    /*
           function for add and update sub-admins
    */

    public function admin_post_save(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:200',
            'last_name' => 'required|max:200',
            'email' => 'required|email|max:200',
            'id' => 'required',
            // password is required from add page only
            'password' => 'required_if:id,==,0', 
        ]);

        $id = $request->id;

         /*
             If, $id is 0; admin add code will run
             else, admin update code will run
        */

        if($id  == "0"){
          /*
              first check whether anyone is present with same email id or not,
              if not present create an admin else give error
          */

          $check_email = Admin::whereEmail($request->email)->first();
          
          if($check_email == null){
            // add code will run
            $admin = Admin::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'type' => 'sub_admin',
                    'status' => $request->status,
            ]);

              // add notification if sub admin add a admin
              if(Auth::guard('admin')->user()->type == "sub_admin"){
                Notification::setNotifications(Auth::guard('admin')->user()->id, 'Add', 'Admin', $admin->id);
              }
          }
          else{
                 return back()->with('existing_error', 'This Email Id is Already Present. You can not use this Email Id again');
          }
        }
        else{
            /*
              first check whether anyone is present with same email id or not,
              if not present create an admin else give error
            */

            $check_email = Admin::whereEmail($request->email)
                           ->where('id', '!=', $request->id)
                           ->first();
            
            if($check_email == null){
              $upassword = ($request->password != null) ? (bcrypt($request->password)) : (Admin::whereEmail($request->email)->first()->password);
              
            // update code will run
            Admin::whereId($request->id)->update([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'password' => $upassword,
                    'status' => $request->status,
            ]);

            // add notification if sub admin add a admin
            if(Auth::guard('admin')->user()->type == "sub_admin"){
              Notification::setNotifications(Auth::guard('admin')->user()->id, 'Update', 'Admin', $request->id);
            }

          }
          else{
            return back()->with('existing_error', 'This Email Id is Already Present. You can not use this Email Id again');
            }
        }

        return back()->with('admin_success', 'successfully Saved.');
    }

    public function delete($id)
    {
           Admin::find($id)->delete();
           return back()->with('admin_delete', 'Deleted.');
    }
}