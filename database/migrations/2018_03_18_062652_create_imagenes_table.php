<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('url');
            $table->boolean('verificado');
            $table->unsignedInteger('becario_id');
            $table->timestamps();
            $table->foreign('becario_id')->references('user_id')->on('becarios')->onDelete('cascade'); //si se borra el registro de user se borra toda la relacion de la tabla alertas

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}
