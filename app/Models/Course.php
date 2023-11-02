<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "courses";
    protected $fillable = [
        'added_by',
        'name',
        'description',
        'img',
        'video',
        'youtube_video',
        'slug'
    ];
}
