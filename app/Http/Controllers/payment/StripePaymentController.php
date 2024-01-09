<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Facades\Redirect;
use Stripe\Exception\CardException;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\mail\MailManageController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Order\ShipStationManageController;
use App\Models\{Cart, Order, OrderedProduct, Product};

class StripePaymentController extends Controller
{
    //

    public static function StripePay(Request $request, $orderId, $amount){
        try {
            
            $stripe = new \Stripe\StripeClient('sk_test_51MmXfKSCgMR7q6bkWzyl3Im8Geip19fTgonFzBjR3SMcpsNhCE7tFvgR12g7fJCAd8ppSsFCmeRzRJIjYTNkVmSx009rBYW42x');
            $product = $stripe->products->create(['name' => 'Imboxo']);

            $price = $stripe->prices->create(
                [
                  'currency' => 'usd',
                  'product' => $product -> id,
                  "unit_amount" =>$amount * 100
                ]
              );
              
    
            $checkout = $stripe->checkout->sessions->create(
                [
                  'cancel_url' => url('cancel'),
                  'line_items' => [['price' => $price -> id, 'quantity' => 1]],
                  'mode' => 'payment',
                  'success_url' => url('success'),
                ]
              );


             $paymentIntent = $stripe->paymentIntents->create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'automatic_payment_methods' => ['enabled' => true],
              ]);

              $paymentDetails = [
                'orderId' => $orderId,
                'payment_id' => $paymentIntent,
              ];

              session()->put('paymentDetails', $paymentDetails);
              return redirect::to($checkout['url']);

        }
        catch (CardException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function cancel(Request $request){
        return redirect('checkout');
    }

    public function success(Request $request){
        $stripe = new \Stripe\StripeClient('sk_test_51MmXfKSCgMR7q6bkWzyl3Im8Geip19fTgonFzBjR3SMcpsNhCE7tFvgR12g7fJCAd8ppSsFCmeRzRJIjYTNkVmSx009rBYW42x');
        
        /**
         * Update db if payment done 
        */

        /**
             * send order confirmation mail to user
            */
           
            $order = Order::whereId(Session::get("paymentDetails.orderId"))->first();
            $order_products = OrderedProduct::where('order_id', $order->order_id)->get();
            
            $email = Session::get('orderEmail');
            MailManageController::mailSend('mail.order_confirm', ['order' => $order], 'Order Confirmed', $email);
            
            
            /**
             * Ship Station Order create & details Save 
            */

            $orderNumber = rand(100000000, 999999999);

            $shipStation_order_details = [
                'orderNumber' => $orderNumber,
                'orderDate' => date('Y-m-d H:i:s'),
                'paymentDate' => date('Y-m-d H:i:s'),
                'customerEmail' => $order->billing_email,
                'orderKey' => $order->id,
                'orderStatus' => 'awaiting_shipment',
                'billTo' => [
                    'name' => $order->billing_name,
                    'street1' => $order->billing_address1,
                    'city' => $order->billing_town,
                    'state' => $order->billing_state,
                    'postalCode' => $order->billing_zip,
                    'country' => $order->billing_country,
                ],
                'shipTo' => [
                    'name' => $order->shipping_name,
                    'street1' => $order->shipping_address1,
                    'city' => $order->shipping_town,
                    'state' => $order->shipping_state,
                    'postalCode' => $order->shipping_zip,
                    'country' => $order->shipping_country,
                ],
                'shippingAmount' => $order->shipping_cost,
                // "carrierCode" => $order->carrier,
                // "serviceCode" => $order->service_code,
            ];

           
            foreach($order_products as $prod)
            {

                $product = Product::where('id', $prod->product_id)->first();
                $imageUrl = asset('admin/product/featured_img/' . $product->featured_img);

                $shipStation_order_details['items'][] = [
                    'sku' => $product->sku_code,
                    'name' => $product->name,
                    'imageUrl' => $imageUrl,
                    'unitPrice' => $product->price,
                    'quantity' => $prod->product_quantity,
                ];
            }
            
            $ship_res = ShipStationManageController::createOrUpdateOrder($shipStation_order_details);
            
            // dd($ship_res); 
            $ship_res2 = json_decode($ship_res, true);
            $ship_orderId = $ship_res2['orderId'];
            
            /**
             * CHange product quantity when order places & succeed
            */

            $orderProducts = OrderedProduct::where('order_id', $order->order_id)->get();
            foreach($orderProducts as $orderProduct){
                $product = Product::whereId($orderProduct->product_id)->first();
                    Product::whereId($orderProduct->product_id)->update([
                        'no_in_stock' => ($product->no_in_stock - $orderProduct->product_quantity),
                    ]);
            }


            /**
             * Update db if payment done
            */

            Order::whereId(Session::get("paymentDetails.orderId"))->update([
                'txn_id' => Session::get("paymentDetails.payment_id"),
                'status' => '1',
                //'transaction_details' => json_encode($response),
                'ship_station_order_id' => $ship_orderId,
                'ship_station_order_details' => json_encode($ship_res),
            ]);

            Session::forget('paymentDetails');
            Session::forget('orderEmail');
            return redirect('/')->with('success', 'Order is successfully placed');

        // Session::forget('paymentDetails');
        Cart::where('user_id', Auth::user()->id)->delete();
        return Redirect::to('/')->With('success', 'Payment Done');
    }
}
