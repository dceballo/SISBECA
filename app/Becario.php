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

    public function imagenes(){

        return $this->hasMany('avaa\Imagen','becario_id');

    }

    public function actividades(){

        return $this->belongsToMany('avaa\Actividad','becarios_actividades','becario_id','actividad_id')->withTimestamps();

    }
}
