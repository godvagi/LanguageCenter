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
      Schema::create('reserve', function (Blueprint $table) {
      $table->increments('i');
      $table->integer('id');
      $table->string('date');
      $table->string('time');
      $table->string('status');
      $table->timestamp('updated_at');
      $table->timestamp('create_at');
      $table->primary(['id','date','time']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve');
    }
}
