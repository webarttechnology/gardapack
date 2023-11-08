<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'address2',
        'city',
        'state',
        'zip_code',
        'country',
        'latitude',
        'longitude',
        'tel',
        'fax',
        'email',
        'url'
    ];
}
