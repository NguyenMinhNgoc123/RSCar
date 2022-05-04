<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('product_id')->primary();
            $table->integer('type_id');
            $table->integer('brand_id');
            $table->string('caption',255);
            $table->string('size');
            $table->integer('type_shoes_id');
            $table->longText('description')->nullable();
            $table->double('price',255);
            $table->integer('discount');
            $table->integer('quantity');
            $table->string('thumbnails',255);
            $table->integer('status');
            $table->date('deleted_at')->nullable();
            $table->timestamps();
            $table->string('address')->nullable();
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
}
