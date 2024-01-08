<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('home_pges', function (Blueprint $table) {
            $table->text('feature_heading')->nullable()->after('home_about_video');
            $table->text('feature_banner')->nullable()->after('feature_heading');
            $table->text('feature_side_img')->nullable()->after('feature_banner');
            $table->text('feature_img_1')->nullable()->after('feature_side_img');
            $table->text('feature_title_1')->nullable()->after('feature_img_1');
            $table->text('feature_description_1')->nullable()->after('feature_title_1');
            $table->text('feature_img_2')->nullable()->after('feature_description_1');
            $table->text('feature_title_2')->nullable()->after('feature_img_2');
            $table->text('feature_description_2')->nullable()->after('feature_title_2');
            $table->text('feature_img_3')->nullable()->after('feature_description_2');
            $table->text('feature_title_3')->nullable()->after('feature_img_3');
            $table->text('feature_description_3')->nullable()->after('feature_title_3');
            $table->text('feature_img_4')->nullable()->after('feature_description_3');
            $table->text('feature_title_4')->nullable()->after('feature_img_4');
            $table->text('feature_description_4')->nullable()->after('feature_title_4');
            $table->text('feature_img_5')->nullable()->after('feature_description_4');
            $table->text('feature_title_5')->nullable()->after('feature_img_5');
            $table->text('feature_description_5')->nullable()->after('feature_title_5');
            $table->text('offer_title_1')->nullable()->after('feature_description_5');
            $table->text('offer_subtitle_1')->nullable()->after('offer_title_1');
            $table->text('offer_banner_1')->nullable()->after('offer_subtitle_1');
            $table->text('offer_title_2')->nullable()->after('offer_banner_1');
            $table->text('offer_subtitle_2')->nullable()->after('offer_title_2');
            $table->text('offer_banner_2')->nullable()->after('offer_subtitle_2');


            $table->text('explore_tech_heading')->nullable()->after('offer_banner_2');
            $table->text('explore_tech_banner')->nullable()->after('explore_tech_heading');
            $table->text('tech_title_1')->nullable()->after('explore_tech_banner');
            $table->text('tech_img_1')->nullable()->after('tech_title_1');
            $table->text('technology_description_1')->nullable()->after('tech_img_1');
            $table->text('tech_title_2')->nullable()->after('technology_description_1');
            $table->text('tech_img_2')->nullable()->after('tech_title_2');
            $table->text('technology_description_2')->nullable()->after('tech_img_2');
            $table->text('tech_title_3')->nullable()->after('technology_description_2');
            $table->text('tech_img_3')->nullable()->after('tech_title_3');
            $table->text('technology_description_3')->nullable()->after('tech_img_3');
            $table->text('why_us_title_1')->nullable()->after('technology_description_3');

            
            $table->text('why_us_img_1')->nullable()->after('why_us_title_1');
            $table->text('why_us_desc_1')->nullable()->after('why_us_img_1');
            $table->text('why_us_title_2')->nullable()->after('why_us_desc_1');
            $table->text('why_us_img_2')->nullable()->after('why_us_title_2');
            $table->text('why_us_desc_2')->nullable()->after('why_us_img_2');
            $table->text('why_us_title_3')->nullable()->after('why_us_desc_2');
            $table->text('why_us_img_3')->nullable()->after('why_us_title_3');
            $table->text('why_us_desc_3')->nullable()->after('why_us_img_3');
            $table->text('why_us_title_4')->nullable()->after('why_us_desc_3');
            $table->text('why_us_img_4')->nullable()->after('why_us_title_4');
            $table->text('why_us_desc_4')->nullable()->after('why_us_img_4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
