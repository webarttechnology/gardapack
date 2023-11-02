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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('order_id');
            $table->string('billing_name');
            $table->string('billing_username')->nullable();
            $table->string('billing_email');
            $table->string('billing_phone')->nullable();
            $table->text('billing_address1');
            $table->text('billing_address2')->nullable();
            $table->string('billing_country');
            $table->string('billing_town')->nullable();
            $table->string('billing_state');
            $table->string('billing_zip');
            $table->string('order_notes')->nullable();
            $table->string('status', 50)->default(0)->comment('0=>not paid, 1=> paid');
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
        Schema::dropIfExists('orders');
    }
};
