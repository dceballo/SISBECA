<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    protected $table='nominas';

    public function becarios(){

        return $this->belongsToMany('avaa\Becario','becarios_nominas','nomina_id','becario_id')->withTimestamps();
    }
}
