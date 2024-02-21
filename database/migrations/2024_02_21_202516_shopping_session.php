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
        Schema::create('shopping_session', function (Blueprint $table) {
            $table->bigIncrements('session_id');
            $table->unsignedBigInteger('cust_id');
            $table->foreign('cust_id')->references('cust_id')->on('customer')->onDelete('cascade');
            $table->decimal('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopping_session');
    }
};
