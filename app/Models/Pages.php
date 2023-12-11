<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $table = "pages";
    protected $fillable = [
    'name', 
    'title', 
    'featured_img', 
    'description', 
    'address', 
    'phone', 
    'email', 
    'map_link',


    'img2',
    'img3',
    'img4',
    'img5',
    'description2',
    'description3',
    'description4',
    'description5',
    'youtube_link1',
    'youtube_link2'
   ];
}
