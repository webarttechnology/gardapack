<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePge extends Model
{
    use HasFactory;
    protected $fillable = [
        'meta_title',
        'meta_description', 
        'banner',
        'banner_des',
        'home_about_heading',
        'home_about_des',
        'home_about_video',

        'feature_heading',
        'feature_banner',
        'feature_side_img',

        'feature_img_1',
        'feature_title_1',
        'feature_description_1',

        'feature_img_2',
        'feature_title_2',
        'feature_description_2',

        'feature_img_3',
        'feature_title_3',
        'feature_description_3',

        'feature_img_4',
        'feature_title_4',
        'feature_description_4',

        'feature_img_5',
        'feature_title_5',
        'feature_description_5',

        'offer_title_1',
        'offer_subtitle_1',
        'offer_banner_1',
        'offer_link_1',
        
        'offer_title_2',
        'offer_subtitle_2',
        'offer_banner_2',
        'offer_link_2',

        'explore_tech_heading',
        'explore_tech_banner',

        'tech_title_1',
        'tech_img_1',
        'technology_description_1',
        
        'tech_title_2',
        'tech_img_2',
        'technology_description_2',
        
        'tech_title_3',
        'tech_img_3',
        'technology_description_3',

        'why_us_title_1',
        'why_us_img_1',
        'why_us_desc_1',
        
        'why_us_title_2',
        'why_us_img_2',
        'why_us_desc_2',
        
        'why_us_title_3',
        'why_us_img_3',
        'why_us_desc_3',
        
        'why_us_title_4',
        'why_us_img_4',
        'why_us_desc_4',

        'faq_banner',
        'testimonial_heading',
        'why_us_heading',

        'btn1_txt',
        'btn2_txt',
        'btn1_link',
        'btn2_link',
    ];
}
