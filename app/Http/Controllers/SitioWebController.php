<?php

namespace avaa\Http\Controllers;

use avaa\Noticia;
use Illuminate\Http\Request;
use avaa\Http\Controllers\Controller;

class SitioWebController extends Controller
{
    //

    public function index()
    {
        $noticias = Noticia::query()->where('tipo', '=', "noticia")->where('es_miembro_institucional','=','0')->orderBy('updated_at','desc')->limit(5)->get();

        $cantidad=$noticias->count();

        $miembros=  Noticia::query()->where('tipo', '=', "articulo")->orderBy('updated_at','desc')->get();

        $cantM= $miembros->count();
        return view('index')->with('route',"home")->with('noticias',$noticias)->with('cantidad',$cantidad)->with('miembros',$miembros)->with('cantM',$cantM);
    }

    public function noticias()
    {
        return view('web_site.noticias')->with('route','noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showNoticia($id)
    {
        // Eliminar una noticia

        $noticia= Noticia::find($id);
;
        if(is_null($noticia))
        {
            abort('404','Archivo no encontrado');
        }

        return  view('web_site.page_notices.page-noticia')->with('route','articulos')->with('noticia',$noticia);
    }


}
