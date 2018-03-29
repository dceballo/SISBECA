<?php

namespace avaa\Http\Controllers;

use avaa\Costo;
use Illuminate\Http\Request;

class SisbecaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('sisbeca.index');
    }

    public function createOrUpdateCostos(Request $request, $id)
    {
        if($id==0)
        {
            $costo = new Costo($request->all());
            $costo->save();
            flash('Costos Definidos Exitosamente','success')->important();
        }
        else
        {
            $costo = Costo::first();

            $costo->fill($request->all());

            $costo->save();

            flash('Costos Actualizados Exitosamente','success')->important();


        }

        return  redirect()->route('costos.show');

    }

    public function viewCostos()
    {
        $costos= Costo::first();
        if(is_null($costos))
        {
            $costos = new Costo();
            $id=0;
            flash('No se han definido los Costos Actualmente, Por favor definelos')->error()->important();
        }
        else
        {
            $id=$costos->id;
        }

        return view('sisbeca.costos.costo')->with('costo',$costos)->with('id',$id);
    }


}
