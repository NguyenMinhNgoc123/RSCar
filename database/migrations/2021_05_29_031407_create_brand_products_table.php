<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_products', function (Blueprint $table) {
            $table->integer('brand_id')->autoIncrement();
            $table->string('brand_name',255);
            $table->longText('brand_caption');
            $table->longText('brand_content1');
            $table->longText('brand_content2');
            $table->longText('brand_content3');
            $table->longText('brand_description');
            $table->string('brand_thumbnails',255);
            $table->dateTime('created');
            $table->dateTime('updated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand_products');
    }
}
