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
        Schema::create('product_cars', function (Blueprint $table) {
            $table->integer('product_id')->primary();
            $table->integer('type_id');
            $table->integer('brand_id');
            $table->string('caption',255);
            $table->string('model',255);
            $table->string('number_kilometers',255);
            $table->integer('type_vehicles_id');
            $table->string('name_car',255);
            $table->string('capacity',255);
            $table->string('Year_of_registration',255);
            $table->string('status_car',255);
            $table->longText('description');
            $table->string('address',255);
            $table->double('price',255);
            $table->double('deposit',255);
            $table->integer('discount');
            $table->integer('quantity');
            $table->string('thumbnails',255);
            $table->integer('status');
            $table->timestamps();
            $table->foreign('type_id')->references('type_id')->on('post_types');
            $table->foreign('brand_id')->references('brand_id')->on('brand_products');
            $table->foreign('type_vehicles_id')->references('type_vehicles_id')->on('type_vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_cars');
    }
}
