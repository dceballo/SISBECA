<?php

namespace avaa\Http\Controllers;

use avaa\Coordinador;
use avaa\Editor;
use avaa\User;
use Redirect;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

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
        return view('sisbeca.crudUser.mantenimientoUsuario');
    }

    public function getUsers()
    {
        /*
        $model = User::query();

        return \DataTables::eloquent($model)
            ->addColumn('accion', 'Hi {{$name}}!')
            ->toJson();
*/
        $users = User::select(['id','name','email','rol'])->where('rol', '=', "coordinador")->orWhere('rol','editor')->orWhere('rol','directivo')->get();
        return Datatables::of($users)
            ->make(true);
      /*  return \DataTables::of(User::query()->where('rol', '=', "coordinador")->orWhere('rol','=','editor')->orWhere('rol','=','directivo'))->make(true);
    */
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

                if($coordinador->save()){
                    flash('Usuario->'.strtoupper($user->rol).' Registrado Exitosamente!','success')->important();
                }else{
                    flash('Ha ocurrido un error al registrar el Usuario->'.strtoupper($user->rol))->error()->important();
                }
            } else {
                if ($user->rol === 'editor') {

                    //creacion de un registro en la tabla de Editor
                    $editor = new Editor();

                    $editor->user_id = $user->id;


                    if($editor->save()){
                        flash('Usuario->'.strtoupper($user->rol).' Registrado Exitosamente!','success')->important();
                    }
                    else{
                        flash('Ha ocurrido un error al registrar el Usuario->'.strtoupper($user->rol))->error()->important();
                    }

                }
            }
            return redirect()->route('mantenimientoUser.index');

        }
        else {

            flash('No puedes crear un usuario con rol '.$request->rol.' porque ya existe')->error()->important();
            return back();
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


        if(is_null($user))
        {
            flash('El Archivo solicitado no ha sido encontrado','error')->important();
            return back();
        }

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

            flash('Usuario Actualizado Exitosamente','success')->important();

            //Si al actualizar se quiere cambiar de rol  a uno que tenga una relacion con tablas distintas se manejan estas condiciones

            //ademas esto mas adelante tambien se debe modificar ya que si un coordinador tiene a cargo becarios o un editor tiene otras tablas ya asociadas entonces se puede perder las relaciones

            if(($rolViejo==='directivo'||$rolViejo==='coordinador')&&($rolNuevo=='editor'))
            {
                $coordinadorDelete= Coordinador::query()->where('user_id', '=', "$user->id")->delete();

                $edit= new Editor();

                $edit->user_id=$user->id;

                if($edit->save())
                {
                    flash('Usuario con rol '.strtoupper($rolViejo).' Actualizado a rol '.strtoupper($rolNuevo).' Exitosamente','success')->important();
                }
                else
                {
                    flash('Ha ocurrido un error al cambiar rol de usuario')->error()->important();
                }
            }
            else
            {
                if(($rolNuevo==='directivo'||$rolNuevo==='coordinador')&&($rolViejo=='editor'))
                {
                    $editDelete= Editor::query()->where('user_id', '=', "$user->id")->delete();


                    $coord= new Coordinador();

                    $coord->user_id=$user->id;

                   if( $coord->save()){
                       flash('Usuario con rol '.strtoupper($rolViejo).' Actualizado a rol '.strtoupper($rolNuevo).' Exitosamente','success')->important();
                   }
                   else{
                       flash('Ha ocurrido un error al cambiar rol de usuario')->error()->important();
                   }
                }
            }
        }
        else{
            flash('No puedes cambiar de rol '.strtoupper($rolViejo).' porque ya existe el rol '.strtoupper($rolNuevo))->error()->important();

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
        if(is_null($user))
        {
            flash('El Archivo solicitado no ha sido encontrado')->error()->important();
            return back();
        }

        if($user->delete()) {

            flash('El Usuario ha sido Eliminado Exitosamente', 'info')->important();

        }
        else{
            flash('Ha ocurrido un error al tratar de eliminar usuario')->error()->important();
        }

        return  redirect()->route('mantenimientoUser.index');
    }
}
