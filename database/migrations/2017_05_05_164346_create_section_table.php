<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('section', function (Blueprint $table) {
          $table->increments('id');
          $table->string('email');  // change email
          $table->integer('sub_id');
          $table->integer('time_use')->unsigned()->default(0);
          $table->integer('time_left')->unsigned();
          $table->timestamps();
          $table->softDeletes();     // no
          $table->foreign('email') // email
                ->references('email')   // email
                ->on('users');
          $table->foreign('sub_id')
                ->references('sub_id')
                ->on('subject');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('section');
    }
}
