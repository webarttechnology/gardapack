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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('sub_category_id')->nullable();
            $table->string('added_by')->nullable();
            $table->text('name');
            $table->text('title');
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('featured_img');
            $table->string('price')->default(0);
            $table->string('discount')->default(0);
            $table->string('delivary_charge')->nullable();
            $table->string('gallery')->nullable();
            $table->string('sku_code')->nullable();
            $table->string('video')->nullable();
            $table->text('website_link')->nullable();
            $table->string('no_in_stock', 50)->nullable();
            $table->string('stock_status', 50)->nullable();
            $table->text('slug')->nullable();
            $table->string('rating', 50)->default(0)->nullable();
            $table->string('status')->default('active');
            $table->text('tags')->nullable();
            $table->text('weight')->nullable();
            $table->text('length')->nullable();
            $table->text('width')->nullable();
            $table->text('height')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
};
