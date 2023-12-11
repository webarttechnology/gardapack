<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Product};

class StockManagementController extends Controller
{
    //

    public function page($type){
        
       if($type == "in-stock"){
            $products = Product::inStockProducts();
            $type = "In Stock";
       }
       if($type == "lowest-in-stock"){
              $products = Product::lowestInStockProducts();
              $type = "Lowest in Stock"; 
       }
       if($type == "out-of-stock"){
            $products = Product::outOfStockProducts();
            $type = "Out of Stock";
       }

       $in_products = count(Product::inStockProducts());
       $out_product = count(Product::outOfStockProducts());
    //    dd($products);
        return view('admin.stock.page', compact('products', 'type', 'in_products', 'out_product'));
    }
}
