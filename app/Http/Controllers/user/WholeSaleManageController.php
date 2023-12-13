<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User, WholesaleInfo};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class WholeSaleManageController extends Controller
{
    //

    public function wholesaler_add(Request $request){
           $request->validate([
               'fname' => 'required',
               'lname' => 'required',
               'email' => 'required|email',
               'phone' => 'required|max:15',
               'company_name' => 'required',
               'reseller_id' => 'required|max:50',
               'address1' => 'required',
               'city' => 'required',
               'state' => 'required',
               'zip' => 'required',
               'country' => 'required',
               'img' => 'mimes:jpg,jpeg,png|max:4096',
           ]);

           $check = User::whereEmail($request->email)->where('user_type', 'wholesale')->first();
           $unique_code = Str::random(40);
           $password = rand(1000000, 9999999);

           if($check == null){
                $image = $request->file('img');
                $imageName = time().$image->getClientOriginalName();
                $image->move(public_path('uploads/wholesaler'),$imageName);

                $user = User::create([
                    'name' => $request->fname." ".$request->lname,
                    'email' => $request->email,
                    'password' => bcrypt($password),
                    'phone' => $request->phone,
                    'user_type' => 'wholesale',
                    'unique_code' => $unique_code,
                ]);

                WholesaleInfo::create([
                    'user_id' => $user->id,
                    'phone' => $request->phone,
                    'company_name' => $request->company_name,
                    'resellerId' => $request->reseller_id,
                    'resellerFile' => $imageName,
                    'address_line1' => $request->address1,
                    'address_line2' => $request->address2,
                    'city' => $request->city,
                    'state' => $request->state,
                    'zip' => $request->zip,
                    'country' => $request->country,
                ]);

                $email = $request->email;
                Mail::send('mail.pass_change', ['password' => $password, 'uniqueCode' => $unique_code], function($message) use($email) {
                    $message->to($email)->subject('Change Your Password');
                });

                return redirect()->back()->with('success', 'Successfully Registered');
           }else{
               return redirect()->back()->with('error', 'You Have ALready Registered with this Email');
           }
    }

    public function wholesaler_lists(){
          $lists = User::with('info')->where('user_type', 'wholesale')->orderBy('id', 'desc')->get();
          return view('admin.wholesale.lists', compact('lists'));
    }

    public function wholesaler_status($id, $status){
           User::whereId($id)->update([
               'is_accept' => $status,
           ]);

           return redirect()->back()->with('success', 'Success');
    }

    public function wholesaler_password_change($code){
            if(User::where('unique_code', $code)->exists()){
                 return view('front_end.wholesale.change_password', compact('code'));
            }else{
                abort(403);
            }
    }

    public function password_change_action(Request $request, $code){
            $request->validate([
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password',
            ]);

            $detail = User::where('unique_code', $code)->first();
            $email = $detail->email;
            Mail::send('mail.confirmation', ['msg' => 'You Have Successfully Change Your Password'], function($message) use($email) {
                $message->to($email)->subject('Password Change');
            });

            User::where('unique_code', $code)->update([
                'password' => bcrypt($request->password),
                'unique_code' => Str::random(4)
            ]);

            return redirect('/')->with('success', 'Password change Successfully');
    }
}
