<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_description', 
        'page_heading',
        'page_des',
        'email',
        'phone',
        'live_chat',
    ];
}
