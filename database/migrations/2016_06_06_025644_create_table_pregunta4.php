<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePregunta4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('pregunta4', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('val1');
             $table->integer('val2');
             $table->integer('val3');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('pregunta4');
     }
}
