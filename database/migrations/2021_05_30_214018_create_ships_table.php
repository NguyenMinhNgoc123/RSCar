<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->integer('ship_id')->primary();
            $table->string('full_name_ship',255);
            $table->string('email_ship',255);
            $table->string('address_ship',255);
            $table->string('phone_no_ship',255);
            $table->longText('description_ship');
            $table->dateTime('created_ship');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ships');
    }
}
