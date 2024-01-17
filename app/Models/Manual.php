<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    use HasFactory;

    protected $table = "manual";
    protected $fillable = [
        'meta_title',
        'meta_description',
        'title',
        'pdf'
    ];
}
