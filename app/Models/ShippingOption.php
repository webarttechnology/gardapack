<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingOption extends Model
{
    use HasFactory;

    protected $table = "shipping_options";
    protected $fillable = [
        'title',
        'price',
        'status'
    ];
}
