<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Costo extends Model
{
    protected $table='costos';


    protected $fillable = [
        'sueldo_becario', 'costo_ases_basica', 'costo_ases_intermedia','costo_ases_completa','costo_membresia',
    ];
}
