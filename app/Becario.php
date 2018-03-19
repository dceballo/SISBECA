<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Becario extends Model
{
    //nombre de la tabla a quien hace referencia en base de datos
    protected $table= 'becarios';


    //Relación uno a uno con USER
    public function user()
    {
        return $this->belongsTo('avaa\User','user_id');
    }

    public function actividades(){

        return $this->belongsToMany('avaa\Actividad','becarios_actividades','becario_id','actividad_id')->withTimestamps();

    }

    public function coordinador(){

        return $this->belongsTo('avaa\Coordinador','coordinador_id');

    }

    public function factLibros(){

        return $this->hasMany('avaa\FactLibro','becario_id');

    }

    public function cursos(){

        return $this->belongsToMany('avaa\Curso','becarios_cursos','becario_id','curso_id')->withTimestamps();

    }

    public function notas(){

        return $this->hasMany('avaa\Nota','becario_id');

    }

    public function nominas(){

        return $this->belongsToMany('avaa\Nomina','becarios_nominas','becario_id','nomina_id')->withTimestamps();

    }

    public function nomBorradores(){

        return $this->belongsToMany('avaa\NomBorrador','becarios_nomborradores','becario_id','nomborrador_id')->withTimestamps();

    }
}
