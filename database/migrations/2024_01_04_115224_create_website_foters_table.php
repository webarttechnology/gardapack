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
        Schema::create('website_footers', function (Blueprint $table) {
            $table->id();
            $table->text('footer_desc')->nullable();
            $table->text('fb_link')->nullable();
            $table->text('fb_status')->nullable();
            $table->text('twitter_link')->nullable();
            $table->text('twitter_status')->nullable();
            $table->text('goog_link')->nullable();
            $table->text('goog_status')->nullable();
            $table->text('pint_link')->nullable();
            $table->text('pint_status')->nullable();
            $table->text('copy_right_text')->nullable();
            $table->text('foot_img')->nullable();
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
        Schema::dropIfExists('website_foters');
    }
};
