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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->text('address2');
            $table->text('city');
            $table->text('state');
            $table->text('zip_code');
            $table->text('country');
            $table->text('latitude');
            $table->text('longitude');
            $table->text('tel');
            $table->text('fax');
            $table->text('email');
            $table->text('url');
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
        Schema::dropIfExists('shops');
    }
};
