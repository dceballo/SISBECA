<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('retroactivo')->nullable();
            $table->decimal('sueldo_base');
            $table->decimal('monto_libros')->nullable();
            $table->decimal('total');
            $table->unsignedInteger('mes');
            $table->unsignedInteger('year');
            $table->enum('status',['pendiente', 'generado', 'pagado'])->default('pendiente');
            $table->timestamp('fecha_pago')->nullable();
            $table->timestamp('fecha_generada')->nullable();
            $table->timestamps();

            //crear una tabla que funcione como pivot porque tenemos una relación de muchos a muchos
        });

        //laravel por defecto nos recomienda que cuando se vaya a crear  una tabla pirvot esa tabla debe llevar el nombre
        //de manera singular las dos tablas que se vayan a relacionar
        Schema::create('becarios_nominas',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('nomina_id');

            $table->foreign('user_id')->references('user_id')->on('becarios')->onDelete('cascade');
            $table->foreign('nomina_id')->references('id')->on('nominas')->onDelete('cascade');
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
        Schema::drop('becarios_nominas');
        Schema::dropIfExists('nominas');
    }
}
