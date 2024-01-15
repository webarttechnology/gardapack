<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Order\ShipStationManageController;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\Product;
use App\Models\Settings;
use App\Models\ShippingOption;
use Illuminate\Http\Request;

class ShippingOptionsManageController extends Controller
{
    //

    public function list()
    {
        $menubars = ShippingOption::orderBy('id', 'desc')->get();
        return view('admin.shipping.list', compact('menubars'));
    }

    public function add_page()
    {
        return view('admin.shipping.add');
    }

    public function add_action(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'status' => 'required',
            'skip_free_shipping' => 'required',
        ]);

        ShippingOption::create([
            'title' => $request->title,
            'price' => $request->price,
            'status' => $request->status,
            'skip_free_shipping' => $request->skip_free_shipping,
        ]);

        return redirect('admin/shipping/list')->with('success', 'Successfully Added');
    }

    public function update($id)
    {
        $detail = ShippingOption::whereId($id)->first();
        return view('admin.shipping.update', compact('detail'));
    }

    public function update_action(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'status' => 'required',
            'skip_free_shipping' => 'required',
        ]);

        $detail = ShippingOption::whereId($id)->first();

        ShippingOption::whereId($id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'status' => $request->status,
            'skip_free_shipping' => $request->skip_free_shipping,
        ]);

        return redirect('admin/shipping/list')->with('success', 'Successfully Updated');
    }

    public function delete($id)
    {
        ShippingOption::find($id)->delete();
        return redirect('admin/shipping/list')->with('success', 'Deleted');
    }

    public function getShipmentPrice($total_price, $country, $id = null)
    {
        $details = ShippingOption::whereId($id)->first();
        $free_ship = Settings::where('key', 'free_shipping')->first();
        $international_ship = Settings::where('key', 'international_shipping')->first();
        $international_free_ship = Settings::where('key', 'international_free_shipping')->first();

        // $total_price = $total_price + $details->price;
        if ($country == 'US') {
            if ($details) {
                if ($total_price >= $free_ship->value && $details->skip_free_shipping == "no") {
                    $shipment_cost = 0;
                    return response()->json($shipment_cost);
                } else {
                    $shipment_cost = $details->price;
                    return response()->json($shipment_cost);
                }
            } else {
                return response()->json(0);
            }
        } else {
            if ($total_price >= $international_free_ship->value) {
                $shipment_cost = 0;
                return response()->json($shipment_cost);
            } else {
                $shipment_cost = $international_ship->value;
                return response()->json($shipment_cost);
            }
        }
    }

    public function shipment_order(Request $request)
    {
        $order = Order::whereId($request->order_id)->first();
        $order_products = OrderedProduct::where('order_id', $order->order_id)->get();

        $shipStation_order_details = [
            'orderNumber' => $order->ship_station_order_id,
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
            'carrierCode' => $request->carrier,
            'serviceCode' => $request->service,
        ];

        foreach ($order_products as $prod) {
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

        $order->update([
            'carrier' => $request->carrier,
            'service_code' => $request->service,
            'carrier_charge' => $request->carrier_charge_val,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Successfully Saved');
    }
}
