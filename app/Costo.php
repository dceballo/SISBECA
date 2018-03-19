<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Costo extends Model
{
    protected $table='costos';

    public function editor(){

        return $this->belongsTo('avaa\Editor','editor_id');

    }
}
