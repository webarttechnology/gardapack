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
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->text('graph_title')->nullable();
            $table->text('graph_sub_title')->nullable();
            $table->text('graph_sub_sub_title')->nullable();
            $table->text('graph_footer_title')->nullable();
            $table->text('graph_footer_sub_title')->nullable();
            $table->text('technology_effect_title')->nullable();
            $table->text('technology_effect_img_1')->nullable();
            $table->text('technology_effect_img_2')->nullable();
            $table->text('graph_data')->nullable();
            $table->text('prod_1_sku')->nullable();
            $table->text('prod_1_img')->nullable();
            $table->text('prod_1_title')->nullable();
            $table->text('prod_1_short_desc')->nullable();
            $table->text('prod_1_spec')->nullable();
            $table->text('prod_2_sku')->nullable();
            $table->text('prod_2_img')->nullable();
            $table->text('prod_2_title')->nullable();
            $table->text('prod_2_short_desc')->nullable();
            $table->text('prod_2_spec')->nullable();
            $table->text('prod_3_sku')->nullable();
            $table->text('prod_3_img')->nullable();
            $table->text('prod_3_title')->nullable();
            $table->text('prod_3_short_desc')->nullable();
            $table->text('prod_3_spec')->nullable();
            $table->text('technology_effect2_title')->nullable();
            $table->text('technology_effect2_img_1')->nullable();
            $table->text('technology_effect2_img_2')->nullable();
            $table->text('feature_title')->nullable();
            $table->text('feature1')->nullable();
            $table->text('feature2')->nullable();
            $table->text('feature3')->nullable();
            $table->text('feature4')->nullable();
            $table->text('feature5')->nullable();
            $table->text('factor_title')->nullable();
            $table->text('factor_1_title')->nullable();
            $table->text('factor_1_img')->nullable();
            $table->text('factor_1_short_desc')->nullable();
            $table->text('factor_2_title')->nullable();
            $table->text('factor_2_img')->nullable();
            $table->text('factor_2_short_desc')->nullable();
            $table->text('factor_3_title')->nullable();
            $table->text('factor_3_img')->nullable();
            $table->text('factor_3_short_desc')->nullable();
            $table->text('factor_4_title')->nullable();
            $table->text('factor_4_img')->nullable();
            $table->text('factor_4_short_desc')->nullable();
            $table->text('approach_title')->nullable();
            $table->text('approach_1')->nullable();
            $table->text('approach_1_img')->nullable();
            $table->text('approach_2')->nullable();
            $table->text('approach_2_img')->nullable();
            $table->text('approach_3')->nullable();
            $table->text('approach_3_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technologies');
    }
};
