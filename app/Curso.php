<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='cursos';

    public function becarios(){

        return $this->belongsToMany('avaa\Becario','becarios_cursos','curso_id','becario_id')->withTimestamps();
    }

    public function institucion(){

        return $this->belongsTo('avaa\Institucion','institucion_id');

    }

    public function notas(){

        return $this->hasMany('avaa\Nota','curso_id');

    }
}
