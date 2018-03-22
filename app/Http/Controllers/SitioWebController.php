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
        $noticias = Noticia::query()->where('tipo', '=', "noticia")->orderBy('updated_at','asc')->limit(5)->get();

        $cantidad=$noticias->count();

        $miembros=  Noticia::query()->where('tipo', '=', "articulo")->orderBy('updated_at','asc')->get();

        $cantM= $miembros->count();
        return view('index')->with('route',"home")->with('noticias',$noticias)->with('cantidad',$cantidad)->with('miembros',$miembros)->with('cantM',$cantM);
    }

    public function noticias(Request $request)
    {
        $noticias = Noticia::search($request->titulo)->orderBy('updated_at','ASC')->paginate(10);

        $num_noticias= $noticias->count();


        return view('web_site.noticias')->with('route','noticias')->with('noticias',$noticias)->with('titulo',$request->titulo)->with('num_noticias',$num_noticias);
    }

}
