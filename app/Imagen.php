<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table= 'imagenes';

    public function becario(){

        return $this->belongsTo('avaa\Becario','becario_id');

    }
}
