<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{
    use HasFactory;

    protected $table = "ordered_products";
    protected $fillable = [
        'user_id',
        'order_id',
        'product_id',
        'product_price',
        'product_quantity'
    ];
}