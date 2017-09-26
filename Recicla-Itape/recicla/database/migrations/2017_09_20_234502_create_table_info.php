<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function(Blueprint $table){
            $table->increments('id');
            /*$table->integer('id_user')->foreign('id_pergunta')->references('id')->on('user');*/
            $table->integer('autor');
            $table->string('titulo',50);
            $table->string('texto',300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('informacao');
    }
}
