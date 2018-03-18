<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->enum('status',['enviada','aceptada','rechazada'])->default('enviada');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //si se borra el registro de user se borra toda la relacion de la tabla alertas

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
