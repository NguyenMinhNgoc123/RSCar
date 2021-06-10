<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('product_id');
            $table->string('description',255);
            $table->string('star_post',255);
            $table->dateTime('created_review');
            $table->timestamps();
            $table->foreign('product_id')->references('product_id')->on('product_cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_products');
    }
}
