<?php

namespace avaa\Http\Controllers;

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

        $user = new User($request->all());

        //los errores de validación se crean de manera muy facil ya que la vista maneja una variable errors

         $user->password= bcrypt($request->password);
        $user->save();

        return  redirect()->route('mantenimientoUser.index');

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

        $user->fill($request->all());
        $user->password=bcrypt($request->password);

        $user->save();

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
