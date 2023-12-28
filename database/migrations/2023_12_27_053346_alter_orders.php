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
        Schema::table('orders', function (Blueprint $table) {
            $table->text('shipping_name')->nullable()->after('billing_town');
            $table->text('shipping_email')->nullable()->after('shipping_name');
            $table->text('shipping_phone')->nullable()->after('shipping_email');
            $table->text('shipping_address1')->nullable()->after('shipping_phone');
            $table->text('shipping_address2')->nullable()->after('shipping_address1');
            $table->text('shipping_country')->nullable()->after('shipping_address2');
            $table->text('shipping_town')->nullable()->after('shipping_country');
            $table->text('shipping_state')->nullable()->after('shipping_town');
            $table->text('shipping_zip')->nullable()->after('shipping_state');
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
