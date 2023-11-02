<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = "services";
    protected $fillable = [
        'service_id',
        'added_by',
        'title',
        'img',
        'category',
        'gallery',
        'description',
        'title2',
        'img2',
        'description2',
        'y_video_link1',
        'y_video_link2',
        'steps_inv',
        'video',
        'status'
    ];
}
