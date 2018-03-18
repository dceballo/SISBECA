<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table='actividades';

    public function becarios(){

        return $this->belongsToMany('avaa\Becario','becarios_actividades','actividad_id','becario_id')->withTimestamps();
    }

}
