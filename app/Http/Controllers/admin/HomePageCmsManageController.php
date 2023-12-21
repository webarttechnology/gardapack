<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageCmsManageController extends Controller
{
    //

    public function save(Request $request){

           if($request->hasFile('banner')){
                $request->validate([
                    'banner' => 'required|mimes:jg,jpeg,png|max:2048'
                ]);

                
           }
    }
}
