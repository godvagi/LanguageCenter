<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('subjects', function (Blueprint $table) {

      
      $table->integer('sub_id')->primary();
              $table->string('name');
              $table->string('type');              // no
              $table->integer('price');
              $table->integer('hour');
              $table->integer('point');
              $table->string('description');        // no
              $table->timestamps();
              $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
