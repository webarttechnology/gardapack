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
        Schema::create('wholesale_infos', function (Blueprint $table) {
            $table->id();
            $table->text('user_id');
            $table->string('phone', 50);
            $table->text('company_name');
            $table->string('resellerId', 50);
            $table->text('resellerFile');
            $table->text('address_line1');
            $table->text('address_line2')->nullable();
            $table->string('city', 200);
            $table->string('state', 200);
            $table->string('zip', 50);
            $table->string('country', 200);
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
        Schema::dropIfExists('wholesale_infos');
    }
};
