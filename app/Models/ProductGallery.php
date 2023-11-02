<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    use HasFactory;

    protected $table = "product_galleries";
    protected $fillable = [
          'product_id',
          'gallery_image'
    ];

    public function products()
    {
           return $this->belongsTo(Product::class);
    }
}