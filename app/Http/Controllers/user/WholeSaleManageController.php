<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User, WholesaleInfo};

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

           if($check == null){
                $image = $request->file('img');
                $imageName = time().$image->getClientOriginalName();
                $image->move(public_path('uploads/wholesaler'),$imageName);

                $user = User::create([
                    'name' => $request->fname." ".$request->lname,
                    'email' => $request->email,
                    'password' => bcrypt(1234),
                    'phone' => $request->phone,
                    'user_type' => 'wholesale'
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

                return redirect()->back()->with('success', 'Successfully Registered');
           }else{
               return redirect()->back()->with('error', 'You Have ALready Registered with this Email');
           }
    }

    public function wholesaler_lists(){
          $lists = User::with('info')->where('user_type', 'wholesale')->orderBy('id', 'desc')->get();
          return view('admin.wholesale.lists', compact('lists'));
    }
}
