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
        Schema::create('home_pges', function (Blueprint $table) {
            $table->id();
            $table->text('banner')->nullable();
            $table->text('banner_des')->nullable();
            $table->text('home_about_heading')->nullable();
            $table->text('home_about_des')->nullable();
            $table->text('home_about_video')->nullable();
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
        Schema::dropIfExists('home_pges');
    }
};
