<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Order, OrderedProduct, Cart, Product};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class OrderManageController extends Controller
{
    //

    public function order_add(Request $request){
        
           $request->validate([
                'fname' => 'required|max:200',
                'lname' => 'required|max:200',
                'email' => 'required|email|max:200',
                'phone' => 'required|max:15',
                'address1' => 'required',
                'country' => 'required',
                'state' => 'required',
                'zip' => 'required',
                'town' => 'required'
           ],
           [
                'fname.required' => 'First Name is Required',
                'lname.required' => 'Last Name is Required',
                'email.required' => 'Email is Required',
                'phone.required' => 'Phone is Required',
                'address1.required' => 'Address is Required',
                'country.required' => 'Country is Required',
                'state.required' => 'State is Required',
                'zip.required' => 'Zip is Required',
                'town.required' => 'Town is Required',
           ]);

           $order_id = "ODR_".Str::random(20);

           // add order details
           $order = Order::create([
                 'user_id' => Auth::user()->id,
                 'order_id' => $order_id,
                 'billing_name' => $request->fname." ".$request->lname,
                 'billing_username' => $request->username,
                 'billing_email' => $request->email,
                 'billing_phone' => $request->phone,
                 'billing_address1' => $request->address1,
                 'billing_address2' => $request->address2,
                 'billing_country' => $request->country,
                 'billing_town' => $request->town,
                 'billing_state' => $request->state,
                 'billing_zip' => $request->zip,
                 'order_notes' => $request->order_notes,
           ]);

        // add orderted products details
        $carts_items = Cart::where('user_id', Auth::user()->id)->get();

        foreach($carts_items as $cart){
               $price = Product::whereId($cart->product_id)->first();

               OrderedProduct::create([
                    'user_id' => Auth::user()->id,
                    'order_id' => $order_id,
                    'product_id' => $cart->product_id,
                    'product_price' => $price->price,
                    'product_quantity' => $cart->cart_quantity 
               ]);
        }

        return redirect()->back()->with('order_submit', 'Order Submitted Successfully');
    }
}