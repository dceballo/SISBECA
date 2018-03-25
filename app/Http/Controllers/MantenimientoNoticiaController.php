<?php

namespace avaa\Http\Controllers;

use avaa\Editor;
use avaa\Noticia;
use Illuminate\Http\Request;
use avaa\Http\Controllers\Controller;
use Redirect;
use Yajra\Datatables\Datatables;
use Laracasts\Flash\Flash;

class MantenimientoNoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sisbeca.crudNoticia.crearNoticia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Manipulación de Archivos

        //hay que crearle un nombre unico a la imagen que se guardara en el campo
        $file= $request->file('image');


        if(!is_null($file)) {
            //getClientOriginalExtension para conocer la extension
            $name = 'noticiasAVAA_' . time() . '.' . $file->getClientOriginalExtension();
            //la ruta donde queremos guardar esta imagenes
            //public_path() direccion exacta donde esta nuestro proyecto
            $path = public_path() . '/images/noticias/';

            //mover la imagen a la carpeta deseada
            $file->move($path, $name);


            $noticia = new Noticia($request->all());


            //el id del usuario que esta actualmente logueado
            $noticia->editor_id = \Auth::user()->id;

            $noticia->url_imagen = '/images/noticias/'.$name;

            if($noticia->save())
            {
                flash('Articulo Registrado Exitosamente!','success')->important();
            }
            else
            {
                flash('Ha ocurrido un error al registrar el articulo')->error()->important();
            }


        }else{
            flash('Debe Ingresar una imagen para registrar el articulo')->error()->important();
        }


        return redirect()->route('mantenimientoNoticia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //para cargar un formulario el cual es donde vamos a editar algun tipo usuario
        $noticia = Noticia::find($id);


        if(is_null($noticia))
        {

            flash('El Archivo solicitado no ha sido encontrado')->error()->important();
            return back();
        }

        return view('sisbeca.crudNoticia.editarNoticia')->with('noticia',$noticia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $noticia = Noticia::find($id);
        $file= $request->file('image');


        if(!is_null($file)) {
            //se borra la imagen anterior del servidor
            unlink(public_path() .$noticia->url_imagen);
            //getClientOriginalExtension para conocer la extension
            $name = 'noticiasAVAA_' . time() . '.' . $file->getClientOriginalExtension();
            //la ruta donde queremos guardar esta imagenes
            //public_path() direccion exacta donde esta nuestro proyecto
            $path = public_path() . '/images/noticias/';

            //mover la imagen a la carpeta deseada
            $file->move($path, $name);



            $noticia->fill($request->all());


            //el id del usuario que esta actualmente logueado
            $noticia->editor_id = \Auth::user()->id;

            $noticia->url_imagen = '/images/noticias/'.$name;

            if($noticia->save())
            {
                flash('Articulo Actualizado Exitosamente!','success')->important();
            }
            else
            {
                flash('Ha ocurrido un error al actualizar el articulo')->error()->important();
            }


        }
        else
        {
            flash('Debe Ingresar una imagen para la actualización del articulo')->error()->important();
        }

    return  redirect()->route('mantenimientoNoticia.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar una noticia
        $noticia= Noticia::find($id);
        if(is_null($noticia))
        {

            flash('El Archivo solicitado no ha sido encontrado')->error()->important();
            return back();
        }


        if($noticia->delete())
        {
            //se borra la imagen del servidor
            unlink(public_path() .$noticia->url_imagen);
            flash('El Articulo ha sido Eliminado Exitosamente','info')->important();
        }else{
            flash('Ha Ocurrido un error al eliminar articulo')->error()->important();

        }

        return  redirect()->route('mantenimientoNoticia.index');
    }
}
