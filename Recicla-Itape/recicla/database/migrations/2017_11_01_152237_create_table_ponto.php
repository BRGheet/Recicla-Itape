<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePonto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('ponto', function(Blueprint $table){
        $table->increments('id');
        $table->string('nome');
        $table->string('longitude');
        $table->string('latitude');
        $table->boolean('papel');
        $table->boolean('plastico');
        $table->boolean('vidro');
    });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ponto');
    }
}
