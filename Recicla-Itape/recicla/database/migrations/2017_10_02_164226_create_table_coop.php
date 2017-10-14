<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCoop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coop', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('endereco');
            $table->string('telefone');
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
        Schema::drop('coop');
    }
}
