<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactlibrosTable extends Migration
{
    
    public function up()
    {
        Schema::create('factlibros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('curso');
            $table->string('url');
            $table->decimal('costo');
            $table->enum('status',['cargada','revisada','pagada','rechazada'])->default('cargada');
            $table->unsignedInteger('becario_id');
            $table->timestamps();
            
            $table->foreign('becario_id')->references('user_id')->on('becarios')->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('factlibros');
    }
}
