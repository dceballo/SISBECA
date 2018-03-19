<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table='noticias';

    public function editor(){

        return $this->belongsTo('avaa\Editor','editor_id');

    }
}
