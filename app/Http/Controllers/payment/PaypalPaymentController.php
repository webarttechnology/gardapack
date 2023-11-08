<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Epmnzava\PaypalLaravel\PaypalLaravel as Paypal;
use Illuminate\Support\Facades\Session;
use App\Models\{Order};

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
             * Update db if payment done 
             */

            Order::whereId(Session::get("paymentDetails.orderId"))->update([
                'txn_id' => Session::get("paymentDetails.payment_id"),
                'status' => '1',
                'transaction_details' => json_encode($response),
            ]);

            Session::forget('paymentDetails');
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
