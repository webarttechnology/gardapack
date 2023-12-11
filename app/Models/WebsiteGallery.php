<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteGallery extends Model
{
    use HasFactory;

    protected $table = "website_galleries";

    protected $fillable = ['added_by', 'added_id', 'img'];
}
