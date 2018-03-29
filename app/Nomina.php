<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    protected $table='nominas';

    public function becarios()
    {
        return $this->belongsToMany('avaa\Becario','becarios_nominas','nomina_id','user_id',null,'user_id')->withTimestamps();
    }


}
