<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutoriaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutoriais', function (Blueprint $table) {
        $table->increments('id');
        $table->string('autor',30);
        $table->string('titulo',200);
        $table->string('resumo',300);
        $table->string('imagem',250);
        $table->text('texto');
        $table->string('video')->nullable();
        $table->timestamp('dataHora')->useCurrent();
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutoriais');
    }
}
