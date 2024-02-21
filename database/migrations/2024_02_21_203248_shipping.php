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
        Schema::create('shipping', function (Blueprint $table) {
            $table->bigIncrements('shipping_id');
            $table->unsignedBigInteger('cust_id');
            $table->foreign('cust_id')->references('cust_id')->on('customer')->onDelete('cascade');
            $table->string('state');
            $table->string('city');
            $table->text('address');
            $table->integer('postal_code');
            $table->string('phone');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping');
    }
};
