<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSizesToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('disponibilitate')->default("yes");
            $table->tinyInteger('lungime')->nullable();
            $table->tinyInteger('latime')->nullable();
            $table->tinyInteger('adancime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('disponibilitate')->default("yes");
            $table->tinyInteger('lungime')->nullable();
            $table->tinyInteger('latime')->nullable();
            $table->tinyInteger('adancime')->nullable();
        });
    }
}
