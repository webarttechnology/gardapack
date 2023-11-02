<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Rating};

class RatingManageController extends Controller
{
    //

    public function rateing_product(Request $request, $product_id) {
        $request->validate([
                  'rating' => 'required',
                  'comment' => 'required',
           ]);

           Rating::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product_id,
                'rate' => $request->rating,
                'comment' => $request->comment,
                'type' => 'product'
           ]);

           return redirect()->back()->with('success', 'Successfully Saved');
    }
}
