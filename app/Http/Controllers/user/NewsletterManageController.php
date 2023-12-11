<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Newsletter};

class NewsletterManageController extends Controller
{
    //
 
    public function add_newsletter(Request $request){

        Newsletter::create([
            'email' => $request->email,
        ]);

        mail($request->email, "Green Mall - Subscription", "Thank You, You are Successfully Subscribed With US");
        return redirect()->back();
    }
}
