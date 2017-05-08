<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reserves', function (Blueprint $table) {
      $table->increments('i');
      $table->integer('id');
      $table->string('date')->nullable();
      $table->string('time')->nullable();
      $table->string('status')->nullable();
      $table->integer('sub_id')->nullable();
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
        Schema::dropIfExists('reserves');
    }
}
