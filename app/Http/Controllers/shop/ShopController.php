<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;

class ShopController extends Controller
{
    public function all()
    {
        return response()->json([
            'shops' => Shop::get()->toArray()
        ]);
    }
}
