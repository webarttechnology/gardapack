<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Admin, Product};
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

    public function login_page()
    {
           return view('admin.login');
    }

    public function register_page()
    {
          return view('admin.register');
    }

    public function forgot_password_page()
    {
          return view('admin.forgot_password');
    }

    public function dashboard_page()
    {
          return view('admin.dashboard');
    }

    public function post_registration(Request $request)
    {

           $request->validate([
                 'f_name' => 'required|max:200',
                 'l_name' => 'required|max:200',     
                 'email' => 'required|email|unique:users|max:200',   
                 'password' => 'required|max:200',     
                 'country' => 'required|max:200',
           ],
           [
                  'f_name.required' => 'First Name is Required',
                  'f_name.max' => 'First Name too long',
                  'l_name.required' => 'Last Name is Required',
                  'l_name.max' => 'Last Name too long',
                  'email.unique' => 'Email Must be Unique',
                  'email.max' => 'Email too long',
           ]);

           $save = Admin::create([
                'first_name' => $request->f_name,
                'last_name' => $request->l_name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'country' => $request->country,
           ]);

           return back()->with('success', 'Admin created successfully.');
    }

    public function post_login(Request $request)
    {

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request -> input('email'), 'password' => $request -> input('password')])){
            if(Auth::guard('admin')->user()->status == "active"){
                return redirect(url('admin/dashboard'));
            }
            else{
                return redirect(url('admin/login'))->with('error', 'Your Account is Inactive, Please Contact with Admin');
            }
            
            // dd(Auth::guard('admin')->user()->id);
        }
        else{
            return redirect(url('admin/login'))->with('error', 'Your Have Enter Wrong Credentials');
        }

    }

    public function dashboard(){
            return redirect(url('admin/dashboard'));
    }

    public function logout(Request $request){
      Auth::guard('admin')->logout();
      return redirect(url('admin/login'));
    }

    public function forgot_password_action(Request $request)
    {
           $request->validate([
                 'email' => 'required|email|max:200',
                 'new_password' => 'required|max:50',
                 'conf_password' => 'required|max:50|same:new_password',
           ],[
                  'conf_password.same' => 'Confirm Password & New Password Must be Same'
           ]);

           $check = Admin::whereEmail($request->email)->first();
           if($check != null){
                    Admin::whereEmail($request->email)->update([
                          'password' => bcrypt($request->new_password),
                    ]);

                    return back()->with('password_success', 'Successfully Saved.');

           }else{
                    return back()->with('unauthenticated', 'Sorry! You have entered wrong Email Id');
           }
    }

    public function change_password(Request $request)
    {
            if($request -> method() == "GET"){
                     return view('admin.your_profile.change_password');
            }else{
                $request->validate([
                        'new_password' => 'required|max:50',
                        'conf_password' => 'required|max:50|same:new_password',
                ],[
                        'conf_password.same' => 'Confirm Password & New Password Must be Same'
                ]);

                $email = Auth::guard('admin')->user()->email;

                Admin::whereEmail($email)->update([
                        'password' => bcrypt($request->new_password),
                ]);

                return back()->with('password_success', 'Successfully Saved.');
            }
    }
}