<?php

namespace avaa\Http\Controllers;

use Illuminate\Http\Request;
use avaa\Http\Controllers\Controller;
use avaa\Noticia;
use avaa\User;
use avaa\Becario;
use avaa\Documento;
use avaa\FactLibro;

use Redirect;
use Yajra\Datatables\Datatables;

class GetPublicController extends Controller
{
    //
    public function getNoticias($tip=1)
    {
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

    public function generarbecarios()
    {
        $usuarios = User::where('rol','=','becario')->get();
        foreach($usuarios as $usuario)
        {
            $becario = new Becario();
            $becario->user_id = $usuario->id;
            $becario->coordinador_id = 3;//--
            $becario->mentor_id = 4;//--
            $becario->acepto_terminos = true;
            $becario->save();
            
            $documento = new Documento();
            $titulo = str_random(10);
            $documento->titulo = $titulo;
            $documento->url = '/'.$titulo.'.pdf';
            $documento->user_id = $usuario->id;
            $documento->verificado = 0;
            $documento->save();

            $factlibro = new FactLibro();
            $name = str_random(10);
            $factlibro->name = $name;
            $factlibro->curso =  str_random(10);
            $factlibro->url = '/'.$name.'.pdf';
            $factlibro->status = 'cargada';
            $factlibro->costo = rand(1000, 2000) / 10;
            $factlibro->becario_id  = $usuario->id;
            $factlibro->save();

            //return $factlibro;

       }

       return 'Listo';

    }

<<<<<<< HEAD
      public function viewregisterMentor(){

            return view('auth.registerMentor');
    }
=======

    
>>>>>>> 3004330c1758b85ac79cfd1da3809b55951ab1ec
}


