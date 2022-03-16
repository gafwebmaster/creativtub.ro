<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('user_id');
            $table->text('status');
            $table->text('name');
            $table->text('phone');
            $table->text('email');
            $table->text('address');
            $table->text('businessName')->nullable();
            $table->text('cui')->nullable();
            $table->text('message')->nullable();
            $table->text('totalPrice');
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
