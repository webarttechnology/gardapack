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


    'feature_heading',
    'text3',
    'text4',
    'text5',
    'description6',

    'img2',
    'img3',
    'img4',
    'img5',
    'description2',
    'description3',
    'description4',
    'description5',
    'youtube_link1',
    'youtube_link2',

    'how_work_heading',
    'how_work_text1',
    'how_work_text2',
    'how_work_text3',
    'how_work_text4',

    'how_work_desc1',
    'how_work_desc2',
    'how_work_desc3',
    'how_work_desc4',
   ];
}
