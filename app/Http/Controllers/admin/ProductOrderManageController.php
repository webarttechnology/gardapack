<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Order, OrderedProduct};

class ProductOrderManageController extends Controller
{
    //

    public function list(){
          $orders = Order::orderBy('id', 'desc')->get();
          return view('admin.order.lists', compact('orders'));
    }
    
    public function view_details($id){
           $order = Order::where('order_id', $id)->first();
           $order_products = OrderedProduct::where('order_id', $id)->get();
           return view('admin.order.details', compact('order', 'order_products'));
    }
}