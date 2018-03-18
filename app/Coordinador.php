<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    //nombre de la tabla a quien hace referencia en base de datos
    protected $table= 'coordinadores';


    //Relación uno a uno con USER
    public function user()
    {
        return $this->belongsTo('avaa\User','user_id');
    }

}
