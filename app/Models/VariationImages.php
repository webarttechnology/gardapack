<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationImages extends Model
{
    use HasFactory;

    protected $table = "variation_images";
    protected $fillable = ['var_id', 'var_image'];

    public function variations()
    {
            return $this->belongsTo(Variations::class);
    }
}
