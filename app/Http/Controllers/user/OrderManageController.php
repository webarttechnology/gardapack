<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Order, OrderedProduct, Cart, Product};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\payment\PaypalPaymentController;
use App\Http\Controllers\payment\StripePaymentController;
use App\Http\Controllers\Order\ShipStationManageController;
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
                    'town' => 'required',
                    
                    'bill_fname' => 'required|max:200',
                    'bill_lname' => 'required|max:200',
                    'bill_email' => 'required|email|max:200',
                    'bill_phone' => 'required',
                    'bill_address1' => 'required',
                    'bill_country' => 'required',
                    'bill_state' => 'required',
                    'bill_zip' => 'required',
                    'bill_town' => 'required',

                    // 'carrier' => 'required',
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

                    'bill_fname.required' => 'Billing First Name is Required',
                    'bill_lname.required' => 'Billing Last Name is Required',
                    'bill_email.required' => 'Billing Email is Required',
                    'bill_phone.required' => 'Billing Phone is Required',
                    'bill_address1.required' => 'Billing Address is Required',
                    'bill_country.required' => 'Billing Country is Required',
                    'bill_state.required' => 'Billing State is Required',
                    'bill_zip.required' => 'Billing Zip is Required',
                    'bill_town.required' => 'Billing Town is Required',
                    
                    // 'carrier.required' => 'Carrier is Required',
             ]
         );

         $order_id = "ODR_" . Str::random(30);

         // add order details
         $order = Order::create([
             'user_id' => Auth::user()->id,
             'order_id' => $order_id,

             'shipping_name' => $request->fname . " " . $request->lname,
             'shipping_email' => $request->email,
             'shipping_phone' => $request->phone,
             'shipping_address1' => $request->address1,
             'shipping_address2' => $request->address2,
             'shipping_country' => $request->country,
             'shipping_town' => $request->town,
             'shipping_state' => $request->state,
             'shipping_zip' => $request->zip,
             'billing_username' => $request->username,

             'billing_name' => $request->bill_fname . " " . $request->bill_lname,
             'billing_email' => $request->bill_email,
             'billing_phone' => $request->bill_phone,
             'billing_address1' => $request->bill_address1,
             'billing_address2' => $request->bill_address2,
             'billing_country' => $request->bill_country,
             'billing_town' => $request->bill_town,
             'billing_state' => $request->bill_state,
             'billing_zip' => $request->bill_zip,

             'total_amount' => $request->total_price,
             'order_notes' => $request->order_notes,
            //  'carrier' => $request->carrier,
            //  'service_code' => $request->service,
             'shipping_cost' => $request->shipCost,
            //  'other_cost' => $request->otherCost,

             'shipping_option' => $request->shipping_option,
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

         Session::put('orderEmail', $request->email);

         $amount = number_format(($request->total_price + $request->shipCost), 2);
        //  $link = PaypalPaymentController::paypalPay($request, $order->id, $request->total_price, $request->shipCost, $request->otherCost);
         $link = StripePaymentController::StripePay($request, $order->id, $amount);
         return $link;

         //    return redirect()->back()->with('order_submit', 'Order Submitted Successfully');
     }

     //////
     public function getShipServices($carrierCode){
        $services = ShipStationManageController::getServiceDetails($carrierCode);
        return response()->json(['services' => $services]);
     }

     public function getShipServicesRate($carrierCode, $serviceCode, $toState, $toCountry, $toZip, $toCity){
        $arr = [
           'carrierCode' => $carrierCode,
           'serviceCode' => $serviceCode,
           "packageCode" => null,
           'fromPostalCode' => "78703",
           "toState"=> $toState,
           "toCountry"=> $toCountry,
           "toPostalCode"=> $toZip,
           "toCity"=> $toCity,
        //    "toState"=> "DC",
        //    "toCountry"=> "US",
        //    "toPostalCode"=> "20500",
        //    "toCity"=> "Washington",
           "weight" => [
                "value"=> 3,
                "units"=> "ounces"
           ],
        ];

        $detail = ShipStationManageController::getSpecificServiceRate($arr);
        return response()->json($detail);
     }
}