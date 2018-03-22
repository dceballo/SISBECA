<?php

namespace avaa;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table='noticias';

    public function editor(){

        return $this->belongsTo('avaa\Editor','editor_id','user_id');

    }

    protected $fillable = [
        'titulo', 'contenido', 'tipo','url_articulo',
    ];

    //tiene un scope para las busquedas de noticias
    public function scopeSearch($query,$titulo)
    {
        return $query->where('titulo','LIKE',"%$titulo%");
    }
}
