<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermPolicy extends Model
{
    use HasFactory;

    protected $table = "term_policy";
    protected $fillable = [
        'meta_title',
        'meta_description',
        'img',
        'description',
        'title',
        'type'
    ];
}
