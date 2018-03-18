<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table= 'solicitudes';

    public function user(){

        return $this->belongsTo('avaa\User','user_id');

    }
}
