<?php

namespace avaa\Http\Controllers;

use avaa\Coordinador;
use avaa\Editor;
use Illuminate\Http\Request;
use avaa\User;

class MantenimientoUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {

        $users = User::orderBy('id','ASC')->paginate(4);


        return view('sisbeca.crudUser.mantenimientoUsuario')->with('users',$users);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulario para registrar nuevos usuarios
        return view('sisbeca.crudUser.crearUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //para guardar esos datos del formulario de creacion
        $rol=$request->rol;

        //este condicional me gestionara si existen en la tabla usuarios con rol de editor o directivo, ya que coordinadores si puede existir varios
        if($rol==='coordinador') {
            $reg=null;
        }
        else {
            $reg = User::query()->where('rol', '=', "$rol")->first(); //se busca en la tabla usuario a ver si ya existe el rol
        }

        if(is_null($reg))
        {
            $user = new User($request->all());

            //los errores de validación se crean de manera muy facil ya que la vista maneja una variable errors

            $user->password = bcrypt($request->password);
            $user->save();

            if ($user->rol === 'coordinador' || $user->rol === 'directivo') {

                //creacion de un registro en la tabla de coordinador
                $coordinador = new Coordinador();

                $coordinador->user_id = $user->id;

                $coordinador->save();
            } else {
                if ($user->rol === 'editor') {

                    //creacion de un registro en la tabla de Editor
                    $editor = new Editor();

                    $editor->user_id = $user->id;

                    $editor->save();

                }
            }
            return redirect()->route('mantenimientoUser.index');

        }
        else {
            dd('No puedes crear un rol '.$request->rol.' porque ya existe'); // Esto se cambia por un mensaje de error que no se puede crear mas de un usuario con el rol seleccionado

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // para mostrar un registro en especifico
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
        $user = User::find($id);

        return view('sisbeca.crudUser.editarUsuario')->with('user',$user);
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
        //encargado de recibir los datos que mandemos del usuario que indiquemos en edit y poder actualizarlo
        $user = User::find($id);

        $rolNuevo=$request->rol;
        $rolViejo=$user->rol;

        //este condicional me gestionara si existen en la tabla usuarios con rol de editor o directivo, ya que coordinadores si puede existir varios
        if($rolNuevo===$user->rol || $rolNuevo==='coordinador') {
            $reg=null;
        }
        else {

            $reg = User::query()->where('rol', '=', "$rolNuevo")->first(); //se busca en la tabla usuario a ver si ya existe el rol
        }

        if(is_null($reg)) {

            $user->fill($request->all());
            $user->password = bcrypt($request->password);

            $user->save();

            //Si al actualizar se quiere cambiar de rol  a uno que tenga una relacion con tablas distintas se manejan estas condiciones

            //ademas esto mas adelante tambien se debe modificar ya que si un coordinador tiene a cargo becarios o un editor tiene otras tablas ya asociadas entonces se puede perder las relaciones

            if(($rolViejo==='directivo'||$rolViejo==='coordinador')&&($rolNuevo=='editor'))
            {
                $editDelete= Coordinador::query()->where('user_id', '=', "$user->id")->delete();

                $edit= new Editor();

                $edit->user_id=$user->id;

                $edit->save();
            }
            else
            {
                if(($rolNuevo==='directivo'||$rolNuevo==='coordinador')&&($rolViejo=='editor'))
                {
                    $editDelete= Editor::query()->where('user_id', '=', "$user->id")->delete();


                    $coord= new Coordinador();

                    $coord->user_id=$user->id;

                    $coord->save();
                }
            }
        }
        else{
            dd('No puedes cambiar a un rol '.$request->rol.' porque ya este existe'); // Esto se cambia por un mensaje de error que no se puede crear mas
        }

        return  redirect()->route('mantenimientoUser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // para eliminar un usuario preciso

        $user= User::find($id);
        $user->delete();

        return  redirect()->route('mantenimientoUser.index');
    }
}
