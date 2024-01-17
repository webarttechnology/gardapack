<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User};
use App\Http\Controllers\user\CartManageController;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{

    // Register
    public function register_action(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|max:30',
        ]);

        $check_user = User::whereEmail($request->email)->first();

        if($check_user == null){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

          return redirect()->back()->with('success', 'Successfully Registered');
        }
        else{
           return redirect()->back()->with('warning', 'You have already Registered with us!');
        }
    }

    
    // Login
    public function login_action(Request $request)
     {
          $this->validate($request, [
              'email'   => 'required|email',
              'password' => 'required'
          ]);
  
          if(Auth::attempt(['email' => $request -> input('email'), 'password' => $request -> input('password')])){
            CartManageController::cartSync(Auth::user()->id);

            
            $redirectedUrl = (session()->has('previous_url')) ? (session()->get('previous_url')) : "/";

            if(Auth::user()->user_type == "wholesale"){
                 if(Auth::user()->is_accept == "accept"){
                    return redirect($redirectedUrl);
                    // return redirect()->route('user.home');
                 }else{
                    if(Auth::user()->is_accept != "reject"){
                        Auth::logout();
                        return redirect()->route('user.signup')->with('danger', 'Your Wholesaler Application Still Pending');
                    }else{
                        Auth::logout();
                        return redirect()->route('user.signup')->with('danger', 'Your Wholesaler Application has been Rejected');
                    }
                }
            }else{
                if(Auth::user()->guest_user == 0){
                    return redirect($redirectedUrl);
                    // return redirect()->route('user.home');
                }else{
                    return redirect()->route('user.signup')->with('danger', 'Invalid Credentials');
                }
            }

            //   dd(Auth::user()->id);
          }
          else{
              return redirect()->route('user.signup')->with('danger', 'Email or Password is Incorrect');
          }
     }

     /**
      * logout
     */

     public function logout(Request $request){
        Auth::logout();
        if(session()->has('previous_url')){
            session()->forget('previous_url');
        }
        return redirect()->route('user.signup')->with('success', 'Succesfully Logedout');
     }
}
