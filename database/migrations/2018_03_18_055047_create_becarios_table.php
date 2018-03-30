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
            $table->unsignedInteger('coordinador_id');
            $table->unsignedInteger('mentor_id');
            $table->boolean('acepto_terminos')->default(false);
            $table->enum('status',['activo','probatorio1','probatorio2','egresado','inactivo','desincorporado'])->default('activo');
            $table->decimal('retroactivo')->default(0);
            //los demás campos
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('coordinador_id')
                ->references('user_id')->on('coordinadores')
                ->onDelete('cascade');

            $table->foreign('mentor_id')
                ->references('user_id')->on('mentores')
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
