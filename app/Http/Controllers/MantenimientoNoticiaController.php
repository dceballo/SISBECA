<?php

namespace avaa\Http\Controllers;

use avaa\Editor;
use avaa\Noticia;
use Illuminate\Http\Request;
use avaa\Http\Controllers\Controller;
use Redirect;
use Yajra\Datatables\Datatables;
use Laracasts\Flash\Flash;
use avaa\Http\Requests\NoticiaRequest;
use Validator;
use Illuminate\Validation\Rule;

class MantenimientoNoticiaController extends Controller
{

    public function __construct()
    {
        $this->middleware('editor');
    }

    public function index(Request $request)
    {
        /* Esto se comento porque ahora se usa AJAX
        $noticias = Noticia::search($request->titulo)->orderBy('id','ASC')->paginate(4);

        //each lo que hace es un recorrido por cada uno de las noticias
        $noticias->each(function ($noticias){
            $noticias->editor->user; //aqui lo que hago es llamar a la relaciones para cada uno de las noticias

        });
        */
        return view('sisbeca.crudNoticia.mantenimientoNoticia');
    }


    public function create()
    {
        return view('sisbeca.crudNoticia.crearNoticia');
    }

    public function store(NoticiaRequest $request)
    {
        $file= $request->file('url_imagen');
        $name = 'noticiasAVAA_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/images/noticias/';
        $file->move($path, $name);
        $noticia = new Noticia($request->all());
        $noticia->slug = Noticia::getSlug($noticia->titulo);
        $noticia->editor_id = \Auth::user()->id;
        $noticia->url_imagen = '/images/noticias/'.$name;
        if($noticia->save())
        {
            flash('El artículo fue registrado exitosamente.','success')->important();
        }
        else
        {
            flash('Ha ocurrido un error al registrar el articulo')->error()->important();
        }
        return redirect()->route('mantenimientoNoticia.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $noticia = Noticia::find($id);
        if(is_null($noticia))
        {
            flash('El Archivo solicitado no ha sido encontrado')->error()->important();
            return back();
        }

        return view('sisbeca.crudNoticia.editarNoticia')->with('noticia',$noticia);
    }

    public function update(NoticiaRequest $request, $id)
    {
        $noticia = Noticia::find($id);
        $file= $request->file('url_imagen');
        if($request->tipo==='articulo')
        {
            Validator::make($request->all(), [
                'url_articulo' => 'required|url',
                'email_contacto' => [
                    Rule::unique('noticias')->ignore($noticia->id),
                ],
                'email_contacto' => 'nullable|email|max:30',

            ])->validate();
        }
        unlink(public_path() .$noticia->url_imagen);
        $name = 'noticiasAVAA_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/images/noticias/';
        $file->move($path, $name);
        $noticia->fill($request->all());
        $noticia->slug = Noticas::getSlug($noticia->titulo);
        $noticia->editor_id = \Auth::user()->id;
        $noticia->url_imagen = '/images/noticias/'.$name;
        if($noticia->save())
        {
            flash('EL artículo fue actualizado exitosamente.','success')->important();
        }
        else
        {
            flash('Ha ocurrido un error al actualizar el articulo.')->error()->important();
        }
        return  redirect()->route('mantenimientoNoticia.index');

    }

    public function destroy($id)
    {
        $noticia= Noticia::find($id);
        if(is_null($noticia))
        {
            flash('El Archivo solicitado no ha sido encontrado.')->error()->important();
            return back();
        }

        if($noticia->delete())
        {
            unlink(public_path() .$noticia->url_imagen);
            flash('El artículo ha sido eliminado exitosamente.','info')->important();
        }
        else
        {
            flash('Ha Ocurrido un error al eliminar articulo.')->error()->important();
        }

        return  redirect()->route('mantenimientoNoticia.index');
    }
}
