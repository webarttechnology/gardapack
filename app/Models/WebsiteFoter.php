<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteFoter extends Model
{
    use HasFactory;

    protected $table = "website_footers";
    protected $fillable = [
        'footer_desc',
        'fb_link',
        'fb_status',
        'twitter_link',
        'twitter_status',
        'goog_link',
        'goog_status',
        'pint_link',
        'pint_status',
        'copy_right_text',
        'foot_img',
        'pint_image',
        'goog_image',
        'twitter_image',
        'fb_image'
    ];
}
