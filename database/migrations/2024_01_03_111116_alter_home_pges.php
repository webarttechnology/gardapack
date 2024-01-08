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
            $table->text('offer_link_1')->nullable()->after('offer_banner_1');
            $table->text('offer_link_2')->nullable()->after('offer_banner_2');
            $table->text('testimonial_heading')->nullable()->after('faq_banner');
            $table->text('why_us_heading')->nullable()->after('testimonial_heading');
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
