<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCompare extends Model
{
    use HasFactory;

    protected $table = "product_compares";
    protected $fillable = [
        'user_id',
        'unique_id',
        'prod_id'
    ];
}
