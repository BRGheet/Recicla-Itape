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
        $table->dateTime('data');
        $table->string('titulo');
        $table->string('autor');
        $table->text('texto');
        $table->string('video')->nullable();
        $table->string('img')->nullable();
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
