<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Order, OrderedProduct, Cart, Product};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\payment\PaypalPaymentController;
use Illuminate\Support\Facades\Session;

class OrderManageController extends Controller
{
     //

     public function order_add(Request $request)
     {

          $request->validate(
               [
                    'fname' => 'required|max:200',
                    'lname' => 'required|max:200',
                    'email' => 'required|email|max:200',
                    'phone' => 'required',
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
               ]
          );

          $order_id = "ODR_" . Str::random(30);

          // add order details
          $order = Order::create([
               'user_id' => Auth::user()->id,
               'order_id' => $order_id,
               'billing_name' => $request->fname . " " . $request->lname,
               'billing_username' => $request->username,
               'billing_email' => $request->email,
               'billing_phone' => $request->phone,
               'billing_address1' => $request->address1,
               'billing_address2' => $request->address2,
               'billing_country' => $request->country,
               'billing_town' => $request->town,
               'billing_state' => $request->state,
               'billing_zip' => $request->zip,
               'total_amount' => $request->total_price,
               'order_notes' => $request->order_notes,
          ]);

          // add orderted products details
          $carts_items = Cart::where('user_id', Auth::user()->id)->get();

          foreach ($carts_items as $cart) {
               $price = Product::whereId($cart->product_id)->first();

               OrderedProduct::create([
                    'user_id' => Auth::user()->id,
                    'order_id' => $order_id,
                    'product_id' => $cart->product_id,
                    'product_price' => $cart->amount,
                    'product_quantity' => $cart->cart_quantity,
                    'color' => $cart->color,
                    'variation' => $cart->variation,
               ]);
          }

          Cart::where('user_id', Auth::user()->id)->delete();
          Session::put('orderEmail', $request->email);

          $link = PaypalPaymentController::paypalPay($request, $order->id, $request->total_price);
          return $link;

          //    return redirect()->back()->with('order_submit', 'Order Submitted Successfully');
     }
}
