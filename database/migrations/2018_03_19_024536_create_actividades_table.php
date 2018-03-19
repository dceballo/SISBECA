<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->unsignedInteger('duracion_horas');
            $table->enum('status',['programada','terminada'])->default('programada');
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->unsignedInteger('editor_id');
            $table->timestamps();
            $table->foreign('editor_id')->references('user_id')->on('editores')->onDelete('cascade');

            //crear una tabla que funcione como pivot porque tenemos una relación de muchos a muchos
        });

        //laravel por defecto nos recomienda que cuando se vaya a crear  una tabla pirvot esa tabla debe llevar el nombre
        //de manera singular las dos tablas que se vayan a relacionar
        Schema::create('becarios_actividades',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('becario_id');
            $table->unsignedInteger('actividad_id');

            $table->foreign('becario_id')->references('user_id')->on('becarios')->onDelete('cascade');
            $table->foreign('actividad_id')->references('id')->on('actividades')->onDelete('cascade');
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
        Schema::drop('becarios_actividades');
        Schema::dropIfExists('actividades');
    }
}
