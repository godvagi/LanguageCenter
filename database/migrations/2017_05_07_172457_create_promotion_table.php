<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('promotions', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('pro_id');
        $table->string('name');
        $table->string('startdate');
        $table->string('expdate');
        $table->string('img');
        $table->integer('point');
        $table->boolean('active')->default(1);
        $table->string('descriptive');
        $table->timestamps();
      // $table->integer('pro_id')->primary();
      // $table->string('name');
      // $table->string('path');
      // $table->integer('point');
      // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
