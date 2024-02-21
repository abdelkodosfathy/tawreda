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
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->text('product_img');
            $table->text('product_desc');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('brand_id')->on('brand')->onDelete('cascade');
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('cat_id')->on('category')->onDelete('cascade');
            $table->string('product_price');
            $table->unsignedBigInteger('dis_id');
            $table->foreign('dis_id')->references('dis_id')->on('discount')->onDelete('cascade');
            $table->boolean('product_cert');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
