<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    //nombre de la tabla a quien hace referencia en base de datos
    protected $table= 'mentores';


    //Relación uno a uno con USER
    public function user()
    {
        return $this->belongsTo('avaa\User','user_id');
    }

    //Relación uno a muchos

    public function becarios(){

        return $this->hasMany('avaa\Becario','mentor_id','user_id');

    }
}
