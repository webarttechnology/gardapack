<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Epmnzava\PaypalLaravel\PaypalLaravel as Paypal;
use App\Http\Controllers\mail\MailManageController;
use Illuminate\Support\Facades\Session;
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
            $email = Session::get('orderEmail');
            MailManageController::mailSend('mail.order_confirm', ['order' => $order], 'Order Confirmed', $email);
            
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
