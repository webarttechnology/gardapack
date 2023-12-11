<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ContactUs};

class ContactUsManageController extends Controller
{
    //

    public function contact_us(Request $request){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'tel' => 'required',
                'message' => 'required',
            ]);

            ContactUs::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->tel,
                'message' => $request->message,
            ]);

            return redirect()->back()->with('contact_success', 'Saved Successfully');
    }
    
    public function user_msg(){
            $lists = ContactUs::orderBy('id', 'desc')->get();
            return view('admin.msg.user_msg', compact('lists'));
    }
}
