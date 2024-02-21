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
        Schema::create('check_out', function (Blueprint $table) {
            $table->bigIncrements('check_out_id');
            $table->unsignedBigInteger('session_id');
            $table->foreign('session_id')->references('session_id')->on('shopping_session')->onDelete('cascade');
            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')->references('payment_id')->on('payment_method')->onDelete('cascade');

            $table->unsignedBigInteger('shipping_id');
            $table->foreign('shipping_id')->references('shipping_id')->on('shipping')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_out');
    }
};
