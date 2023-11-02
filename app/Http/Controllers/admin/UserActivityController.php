<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User, Notification};
use Illuminate\Support\Facades\Auth;

class UserActivityController extends Controller
{
    //

    public function user_lists()
    {
           $users = User::orderBy('id', 'desc')->get();
           return view('admin.user.lists', compact('users'));
    }

    public function save_users($page, $id)
    {
            if($page == "add"){
                 $user = '';
                 return view('admin.user.save', compact('page', 'user'));
            }
            else{
                $user = User::whereId($id)->first();
                return view('admin.user.save', compact('page', 'user'));
            }
    }

    public function post_save(Request $request)
    {

        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email|max:200',
        ]);

        $id = $request->id;

        /*
             If, $id is 0; user registration code will run
             else, user update code will run
        */

        if($id == "0"){
            // add
            $user = User::create([
                  'name' => $request->name,
                  'email' => $request->email,
                  'password' => bcrypt($request->password),
            ]);

            // add notification if sub admin add a user
            if(Auth::guard('admin')->user()->type == "sub_admin"){
                  Notification::setNotifications(Auth::guard('admin')->user()->id, 'Add', 'user', $user->id);
            }
        }
        else{
            // update
            User::whereId($id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            // add notification if sub admin update a user
            if(Auth::guard('admin')->user()->type == "sub_admin"){
                Notification::setNotifications(Auth::guard('admin')->user()->id, 'Update', 'user', $id);
            }
        }

        return back()->with('user_success', 'successfully Saved.');
    }

    public function user_delete($id)
    {
            User::find($id)->delete();
            return back()->with('page_delete', 'Deleted.');
    }
}