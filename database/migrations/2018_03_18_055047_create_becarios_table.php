<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBecariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becarios', function (Blueprint $table) {
            $table->primary('user_id'); //se coloca el mismo id porque la relacion uno a uno no pueden existir dos perfiles con el mismo user
            $table->unsignedInteger('user_id');
            $table->boolean('aceptado');
            //los demás campos
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('becarios');
    }
}
