<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactlibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factlibros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('curso');
            $table->decimal('costo');
            $table->enum('status',['cargada','revisada','pagada'])->default('cargada');
            $table->unsignedInteger('documento_id');
            $table->unsignedInteger('becario_id');
            $table->timestamps();
            $table->foreign('documento_id')->references('id')->on('documentos')->onDelete('cascade');
            $table->foreign('becario_id')->references('user_id')->on('becarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factlibros');
    }
}
