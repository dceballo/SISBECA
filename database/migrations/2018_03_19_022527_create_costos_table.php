<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('sueldo_becario')->default(0);
            $table->decimal('costo_ases_basica')->default(0);
            $table->decimal('costo_ases_intermedia')->default(0);
            $table->decimal('costo_ases_completa')->default(0);
            $table->decimal('costo_membresia')->default(0);
            $table->timestamp('fecha_valido')->nullable();
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
        Schema::dropIfExists('costos');
    }
}
