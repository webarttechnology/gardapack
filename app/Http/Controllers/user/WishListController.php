<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{WishList};

class WishListController extends Controller
{
    //

    public function add($product_id, $quantity){
           if(AUth::user()){
               $check = WishList::where('user_id', Auth::user()->id)->where('product_id', $product_id)->first();

                 if($check == null){
                   WishList::create([
                        'user_id' => Auth::user()->id,
                        'product_id' => $product_id,
                        'quantity' => $quantity,
                   ]);

               return response()->json("Success");
             }
             else{
                return response()->json("Exist");
             }
           }else{
               return redirect()->route('user.signup');
           }
    }
    
    // page

    public function page(){
        $lists = WishList::where('user_id', Auth::user()->id)->paginate(10);
        return view('front_end.wishlist', compact('lists'));
    }
    
    // delete

    public function delete($id){
        WishList::find($id)->delete();
        return response()->json("Success");
    }
}