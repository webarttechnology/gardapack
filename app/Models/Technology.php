<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $table = "technologies";
    protected $fillable = [
        'meta_title',
        'meta_description', 
        'graph_title',
        'graph_sub_title',
        'graph_sub_sub_title',
        'graph_footer_title',
        'graph_footer_sub_title',

        'technology_effect_title',
        'technology_effect_img_1',
        'technology_effect_img_2',
        'graph_data', // not done yet

        'prod_1_sku',
        'prod_1_img',
        'prod_1_title',
        'prod_1_short_desc',
        'prod_1_spec',

        'prod_2_sku',
        'prod_2_img',
        'prod_2_title',
        'prod_2_short_desc',
        'prod_2_spec',

        'prod_3_sku',
        'prod_3_img',
        'prod_3_title',
        'prod_3_short_desc',
        'prod_3_spec',

        'technology_effect2_title',
        'technology_effect2_img_1',
        'technology_effect2_img_2',

        'feature_title',
        'feature1',
        'feature2',
        'feature3',
        'feature4',
        'feature5',

        'factor_title',

        'factor_1_title',
        'factor_1_img',
        'factor_1_short_desc',

        'factor_2_title',
        'factor_2_img',
        'factor_2_short_desc',

        'factor_3_title',
        'factor_3_img',
        'factor_3_short_desc',

        'factor_4_title',
        'factor_4_img',
        'factor_4_short_desc',

        'approach_title',
        
        'approach_1',
        'approach_1_img',

        'approach_2',
        'approach_2_img',

        'approach_3',
        'approach_3_img',
    ];
}
