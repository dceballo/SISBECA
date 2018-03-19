<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion')->nullable();
            $table->enum('status',['iniciado','cerrado'])->default('iniciado');
            $table->enum('duracion',['mensual', 'trimestral', 'semestreal', 'anual'])->default('mensual');
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->unsignedInteger('institucion_id');
            $table->timestamps();
            $table->foreign('institucion_id')->references('id')->on('instituciones')->onDelete('cascade');

            //crear una tabla que funcione como pivot porque tenemos una relación de muchos a muchos
        });

        //laravel por defecto nos recomienda que cuando se vaya a crear  una tabla pirvot esa tabla debe llevar el nombre
        //de manera singular las dos tablas que se vayan a relacionar
        Schema::create('becarios_cursos',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('becario_id');
            $table->unsignedInteger('curso_id');

            $table->foreign('becario_id')->references('user_id')->on('becarios')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
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
        Schema::drop('becarios_cursos');
        Schema::dropIfExists('cursos');
    }
}
