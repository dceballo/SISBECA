<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class FactLibro extends Model
{
    //
    protected $table='factlibros';

    public function documento(){

        return $this->belongsTo('avaa\Documento','documento_id');

    }

    public function becario(){

        return $this->belongsTo('avaa\Becario','becario_id','user_id');

    }
}
