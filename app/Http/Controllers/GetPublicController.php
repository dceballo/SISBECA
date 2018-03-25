<?php

namespace avaa\Http\Controllers;

use Illuminate\Http\Request;
use avaa\Http\Controllers\Controller;
use avaa\Noticia;
use Redirect;
use Yajra\Datatables\Datatables;

class GetPublicController extends Controller
{
    //
    public function getNoticias($tip=1)
    {
        /*
        $model = User::query();

        return \DataTables::eloquent($model)
            ->addColumn('accion', 'Hi {{$name}}!')
            ->toJson();
*/
        $noticias=null;

        if($tip==0) {
            $noticias = Noticia::select(['id', 'titulo', 'contenido', 'tipo']);
            $objeto= Datatables::of($noticias)->addColumn('userRegistro', function ($noticias) {
                $noti=Noticia::find($noticias->id); //llamo al regististro actual
                $noti->editor; //aqui lo que hago es llamar a la relaciones para cada uno de las noticias
                return $noti->editor->user->name; // Retorno el nombre del usuario que registro la noticia

            })->addColumn('content', function ($noticias) {
                $content= $noticias->contenido;
                $content=substr(strip_tags($content), 0, 20).'...';
                return  $content; // Esto elimina las etiquetas html

            })->make(true);
        }
        else{
            $noticias = Noticia::select(['id', 'titulo', 'contenido', 'tipo'])->where('tipo','=','noticia');
            $objeto= Datatables::of($noticias)->make(true);
        }


        return $objeto;

    }
}
