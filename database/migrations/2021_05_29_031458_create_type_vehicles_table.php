<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_shoes', function (Blueprint $table) {
            $table->integer('type_shoes_id')->autoIncrement();
            $table->string('tv_name',255);
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
        Schema::dropIfExists('type_shoes');
    }
}
