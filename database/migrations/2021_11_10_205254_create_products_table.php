<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();   
            $table->tinyInteger('product_id');
            $table->string('product_name', 150);
            $table->tinyInteger('id_category');
            $table->tinyInteger('id_subcategory');
            $table->decimal('price', 8, 2);
            $table->decimal('incrised_price', 8, 2);
            $table->text('description_one');
            $table->text('description_two');
            $table->text('description_three');
            $table->text('description_four');
            $table->string('product_picture');
            $table->string('in_stock');
            $table->timestamps();
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
