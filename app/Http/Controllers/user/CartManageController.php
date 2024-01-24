<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\{Cart, Product, Variations};

class CartManageController extends Controller
{
    //

    public function cart()
    {
        if (Auth::user()) {
            $carts = Cart::where('user_id', Auth::user()->id)->paginate(10);
            $all_carts = Cart::where('user_id', Auth::user()->id)->get();

            // find sum
            $total = 0;
            foreach ($all_carts as $cart) {
                $total = number_format((float)($total + ($cart->cart_quantity * $cart->amount)), 2, '.', '');
            }

            return view('front_end.cart', compact('carts', 'total'));
        } else {
            if (Session::has('existing_cart')) {
                $total = 0;
                $prods = json_decode(Session::get('existing_cart'), true);
                foreach ($prods as $prod) {
                    $total += ($prod['cart_quantity'] * $prod['amount']);
                }
            } else {
                $total = 0;
            }

            return view('front_end.cart', compact('total'));
            // return redirect()->route('user.signup');
        }
    }

    public function cart_add($product_id, $cart_quantity, $type, Request $request)
    {
        $product_details = Product::whereId($product_id)->first();

        if (Auth::user()) {
            $user_id = Auth::user()->id;

            if ($cart_quantity <= $product_details->no_in_stock) {

                $check = Cart::where('user_id', Auth::user()->id)->where('product_id', $product_id)->first();

                if (!empty($request->variation)) {
                    $variationInfo = Variations::find($request->variation);
                }

                if ($check == null) {
                    Cart::create([
                        'user_id' => $user_id,
                        'product_id' => $product_id,
                        'amount' => !empty($variationInfo) ? $variationInfo->final_price : $product_details->price,
                        'cart_quantity' => $cart_quantity,
                        'color' => $request->color,
                        'variation' => $request->variation

                    ]);
                } else {
                    Cart::where('user_id', $user_id)->where('product_id', $product_id)->update([
                        'cart_quantity' => ($check->cart_quantity + 1),
                        'amount' => !empty($variationInfo) ? $variationInfo->final_price : $product_details->price,
                        'color' => $request->color,
                        'variation' => $request->variation
                    ]);
                }

                // return response()->json($cart_quantity);
                return response()->json("Success");
            } else {
                return response()->json("exceed");
            }
        } else {
            /**
             * If user not login add cart details to session
             */
            if (!empty($request->variation)) {
                $variationInfo = Variations::find($request->variation);
            }

            // $new_cart_quantity = 0;
            // if($type == "multiple-sub"){
            //     $new_cart_quantity = (int) $cart_quantity - 1;
            // }

            $new_data = [
                'product_id' => $product_id,
                'amount' => !empty($variationInfo) ? $variationInfo->final_price : $product_details->price,
                'cart_quantity' => $cart_quantity,
                'color' => $request->color,
                'variation' => $request->variation
            ];

            if (Session::has('existing_cart')) {
                $existing_data = json_decode(Session::get('existing_cart'), true);
                $productExists = false;
                $updatedProduct = [];

                foreach ($existing_data as $index => $data) {
                    if ($data['product_id'] == $new_data['product_id']) {
                        $productExists = true;
                        $updatedProduct = $data;
                        unset($existing_data[$index]);
                    }
                }

                if (!$productExists) {
                    $existing_data[] = $new_data;
                } else {
                    $updatedProduct['cart_quantity'] += $new_data['cart_quantity'];
                    
                    if($type == "multiple-sub"){
                        $updatedProduct['cart_quantity'] = $new_data['cart_quantity'] - 1;
                    }

                    if($type == "multiple-add"){
                        $updatedProduct['cart_quantity'] = $new_data['cart_quantity'] + 1;
                    }

                    $existing_data[] = $updatedProduct;
                }

                Session::put('existing_cart', json_encode($existing_data));
            } else {
                Session::put('existing_cart', json_encode([$new_data]));
            }

            return response()->json("Success");
            // return response()->json($updatedProduct);
        }
    }

    /**
     * Synchronize cart data at the time of login 
     */

    public static function cartSync($userId)
    {
        if (json_decode(Session::get('existing_cart') != null)) {
            $existing_products = json_decode(Session::get('existing_cart'));

            foreach ($existing_products as $existing_product) {
                $check_existing_prod_for_users = Cart::where('user_id', $userId)
                    ->where('product_id', $existing_product->product_id)->first();

                if ($check_existing_prod_for_users == null) {
                    Cart::create([
                        'user_id' => $userId,
                        'product_id' => $existing_product->product_id,
                        'cart_quantity' => $existing_product->cart_quantity,
                        'amount' => $existing_product->amount,
                    ]);
                } else {
                    Cart::whereId($check_existing_prod_for_users->id)->update([
                        'cart_quantity' => $existing_product->cart_quantity,
                    ]);
                }
            }
        }

        if(Auth::user()){
            session()->forget('existing_cart');
        }
        return true;
    }

    public function cart_delete($cart_id)
    {
        if (Auth::check()) {
            Cart::find($cart_id)->delete();
            return response()->json("Success");
        }else{
            $existingCart = json_decode(Session::get('existing_cart'), true);

            foreach ($existingCart as $index => $item) {
                if ($item['product_id'] == $cart_id) {
                    unset($existingCart[$index]);
                    break;
                }
            }
    
            Session::put('existing_cart', json_encode(array_values($existingCart)));
            return response()->json("Success");
        }
        
    }


    /**
     * cart update
     */

    public function cart_update($cart_id, $quantity)
    {
        if ($quantity > 0) {
            Cart::whereId($cart_id)->update([
                'cart_quantity' => $quantity,
            ]);
        }

        return response()->json("success");
    }
}
