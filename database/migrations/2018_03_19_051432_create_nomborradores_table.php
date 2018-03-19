<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomborradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomborradores', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('sueldo_base');
            $table->string('observacion');
            $table->unsignedInteger('mes');
            $table->unsignedInteger('year');
            $table->timestamp('fecha_generada')->nullable();
            $table->timestamps();
        });

        //laravel por defecto nos recomienda que cuando se vaya a crear  una tabla pirvot esa tabla debe llevar el nombre
        //de manera singular las dos tablas que se vayan a relacionar
        Schema::create('becarios_nomborradores',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('becario_id');
            $table->unsignedInteger('nomborrador_id');

            $table->foreign('becario_id')->references('user_id')->on('becarios')->onDelete('cascade');
            $table->foreign('nomborrador_id')->references('id')->on('nomborradores')->onDelete('cascade');
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('becarios_nomborradores');
        Schema::dropIfExists('nomborradores');
    }
}
