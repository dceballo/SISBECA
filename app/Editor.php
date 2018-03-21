<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    //nombre de la tabla a quien hace referencia en base de datos
    protected $table= 'editores';


    //Relación uno a uno con USER
    public function user()
    {
        return $this->belongsTo('avaa\User','user_id');
    }

    public function noticias(){

        return $this->hasMany('avaa\Noticia','editor_id','user_id');

    }

    public function costo(){

        return $this->hasOne('avaa\Costo','editor_id','user_id');

    }

    public function actividades(){

        return $this->hasMany('avaa\Actividad','editor_id','user_id');

    }

    public function instituciones(){

        return $this->hasMany('avaa\Institucion','editor_id','user_id');

    }
}
