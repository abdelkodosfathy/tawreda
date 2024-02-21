<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fav_item', function (Blueprint $table) {
            $table->bigIncrements('fav_item_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('product')->onDelete('cascade');
            $table->unsignedBigInteger('cust_id');
            $table->foreign('cust_id')->references('cust_id')->on('customer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fav_item');
    }
};
