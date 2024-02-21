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
        Schema::create('product_imges', function (Blueprint $table) {
            $table->bigIncrements('imges_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('product_id')->on('product')->onDelete('cascade');
            $table->text('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_imges');
    }
};
