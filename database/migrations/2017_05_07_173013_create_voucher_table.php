<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vouchers', function (Blueprint $table) {
          // $table->increments('id');
          // $table->integer('pro_id');
          // $table->string('code');
          // $table->rememberToken();
          // $table->timestamps();

          $table->increments('id');
          $table->integer('pro_id');
          $table->string('code');
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
        Schema::dropIfExists('vouchers');
    }
}
