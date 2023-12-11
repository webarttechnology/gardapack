<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Epmnzava\PaypalLaravel\PaypalLaravel as Paypal;
use App\Http\Controllers\mail\MailManageController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Order\ShipStationManageController;
use App\Models\{Order, OrderedProduct, Product};

class PaypalPaymentController extends Controller
{
    public static function paypalPay(Request $request, $order_id, $totalPrice)
    {
        $description = "Test";

        $paypal_payments = new paypal;
        $total_amount = $totalPrice;
        $tax = 0;
        $shipping = 0;
        $handling_fee = 0;
        $response = $paypal_payments->CreatePayment($total_amount, $tax, $shipping, $handling_fee, $description);

        // payment Id
        $payment_id = $response["payment_id"];

        $paymentDetails = [
            'orderId' => $order_id,
            'payment_id' => $payment_id,
        ];
        session()->put('paymentDetails', $paymentDetails);
        return redirect($response["checkout_link"]);
    }

    public function success(Request $request)
    {
        $paypal = new Paypal;
        $response = $paypal->executePayment($request->paymentId, $request->PayerID);

        if (json_decode($response)->state == "approved") {
            
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
                    'country' => 'US',
                ],
                'shipTo' => [
                    'name' => $order->billing_name,
                    'street1' => $order->billing_address1,
                    'city' => $order->billing_town,
                    'state' => $order->billing_state,
                    'postalCode' => $order->billing_zip,
                    'country' => 'US',
                ],
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
                'transaction_details' => json_encode($response),
                'ship_station_order_id' => $ship_orderId,
                'ship_station_order_details' => json_encode($ship_res),
            ]);

            Session::forget('paymentDetails');
            Session::forget('orderEmail');
            return redirect('/')->with('success', 'Order is successfully placed');
        } else {
            /**
             * If payment is not approved
             */

            Session::forget('paymentDetails');
            return redirect('/')->with('error', 'Sorry! something went wrong, please try again later');
        }
    }

    public function cancel(Request $request)
    {
        return redirect('/')->with('error', 'Sorry! Your PAyment Has been Canceled');
    }
}
