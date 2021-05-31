<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_id')->primary();
            $table->integer('user_id');
            $table->integer('ship_id');
            $table->integer('payment_id');
            $table->double('total');
            $table->integer('order_status');
            $table->dateTime('order_create');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('ship_id')->references('ship_id')->on('ships');
            $table->foreign('payment_id')->references('payment_id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
