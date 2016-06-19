<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clothes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('type');
          $table->string('link');
          $table->string('image');
          $table->string('price');
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
        Schema::drop('clothes');
    }
}
