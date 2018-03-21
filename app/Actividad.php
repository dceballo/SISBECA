<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //

    protected $table='actividades';

    public function becarios(){

        return $this->belongsToMany('avaa\Becario','becarios_actividades','actividad_id','becario_id','user_id')->withTimestamps();
    }

    public function editor(){

        return $this->belongsTo('avaa\Editor','editor_id','user_id');

    }
}
