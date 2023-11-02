<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Cart, Product};

class CartManageController extends Controller
{
    //

    public function cart() {
        if(Auth::user()){
            $carts = Cart::where('user_id', Auth::user()->id)->paginate(10);
            $all_carts = Cart::where('user_id', Auth::user()->id)->get();
            
            // find sum
            $total =0;
            foreach($all_carts as $cart){
                $total = number_format((double)($total + ($cart->cart_quantity * (Product::where('id', $cart->product_id)->first())->price)), 2, '.', '');
            }
            
            return view('front_end.cart', compact('carts', 'total'));
        }else{
            return redirect()->route('user.signup');
        }
    }
    
    public function cart_add($product_id, $cart_quantity){
        $user_id = Auth::user()->id;
        $product_details = Product::whereId($product_id)->first();

        if($cart_quantity <= $product_details->no_in_stock){
            
            $check = Cart::where('user_id', Auth::user()->id)->where('product_id', $product_id)->first();
            
            if($check == null){
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'cart_quantity' => $cart_quantity
            ]);

            return response()->json("Success");
            }
           else{
             return response()->json("Exist");
           }
        }
        else{
            return response()->json("exceed");
        }
    }
    
    public function cart_delete($cart_id) {
        Cart::find($cart_id)->delete();
        // return redirect()->back();
         return response()->json("Success");
    }
    
    
    /**
     * cart update
     */

     public function cart_update($cart_id, $quantity) {
      if($quantity > 0){
        Cart::whereId($cart_id)->update([
            'cart_quantity' => $quantity,
        ]);
      }

        return response()->json("success");
     }
}