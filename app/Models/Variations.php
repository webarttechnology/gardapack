<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variations extends Model
{
    use HasFactory;

    protected $table = "variations";
    protected $fillable = [
        'product_id',
        'variation',
        'carat',
        'size',
        'amount',
        'color',
        'discount',
        'final_price',
        'image'
    ];

    public function products()
    {
           return $this->belongsTo(Product::class);
    }

    public function variationImages()
    {
           return $this->hasMany(VariationImages::class);
    }
}
