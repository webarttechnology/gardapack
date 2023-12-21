<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCms extends Model
{
    use HasFactory;

    protected $table = "home_cms";
    protected $fillable = [
        'banner'
    ];
}