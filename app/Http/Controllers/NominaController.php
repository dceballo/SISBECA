<?php

namespace avaa\Http\Controllers;

use Illuminate\Http\Request;
use avaa\Http\Controllers\Controller;
use avaa\Becario;
use avaa\Nomina;
use avaa\Costo;
use avaa\User;
use avaa\BecarioNomina;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;


class NominaController extends Controller
{
	public function __construct()
    {
        $this->middleware('directivo');
    }

    public function listar()
    {
        $ultimodia = date("Y-m-d",(mktime(0,0,0,date('m')+1,1,date('Y'))-1));
        $fechagenerar = strtotime ( '-3 day' , strtotime ( $ultimodia ) ) ;//--poner-5
        $fechagenerar = date ( 'Y-m-d' , $fechagenerar );
        $hoy = date('Y-m-d');
        $generar = false;
        $nominasaux = Nomina::where('mes',date('m'))->where('year',date('Y'))->get();
        if($hoy == $fechagenerar and count($nominasaux)==0)
        {
            //verificar que ya fue generada esta nomina
           
            $generar = true;
        }
        $anho = date ( 'Y' , strtotime($fechagenerar) );
        $mes = date ( 'm' , strtotime($fechagenerar) );
        $nominas = DB::table('nominas')
                     ->select(DB::raw('count(*) as total_becarios,sum(total) as total_pagado, mes, year,fecha_generada, fecha_pago,sueldo_base, status, id'))
                     ->groupBy('mes','year')
                     ->orderby('mes','desc')->orderby('year','desc')->get();
        return View('sisbeca.nomina.listar')->with('nominas',$nominas)->with('generar',$generar)->with('mes',$mes)->with('anho',$anho);
    }

    public function consultar($mes, $anho)
    {
        //return $mes.'-'.$anho;
        $nominasfiltro = Nomina::where('mes','=',$mes)->where('year',$anho)->get();
        //return $nominasfiltro;
    	/*$ultimodia = date("Y-m-d",(mktime(0,0,0,date('m')+1,1,date('Y'))-1));
        $fechagenerar = strtotime ( '-3 day' , strtotime ( $ultimodia ) ) ;
        $fechagenerar = date ( 'Y-m-d' , $fechagenerar );
        $hoy = date('Y-m-d');
        $generar = false;
        if($hoy == $fechagenerar)
        {
            //verificar que ya fue generada esta nomina
            $generar = true;
        }
        $anho = date ( 'Y' , strtotime($fechagenerar) );
        $mes = date ( 'm' , strtotime($fechagenerar) );*/
        //return $nominasfiltro->becarios
        //$user= User::find(1);
        //return $user->a;
        //return $nominasfiltro[1]->becarios;
      

        $nominasfiltro->each(function ($nominasfiltro){
           
           
        
            $nominasfiltro->becarios;
        });

        $nominasfiltro->each(function ($nominasfiltro){
           
           
        
            $nominasfiltro->user;
        });
        
     
    	return View('sisbeca.nomina.consultar')->with('nominas',$nominasfiltro)->with('mes',$mes)->with('anho',$anho);
    	
    }

    public function generartodo($mes,$anho)
    {
    	//validar que no se haya generado para una fecha
    	$becarios = Becario::where('acepto_terminos','=',1)->where('status','=','activo')->get();
    	$costo = Costo::first();
        /*$control = Control::first();
        if(is_null($control))
        {
            cantidad=0;
        }*/
        //$control = count(Nomina::groupby('mes','year')->get());
    	foreach($becarios as $becario)
    	{

    		$nomina = new Nomina();
    		$nomina->retroactivo = 0;
            
    		$nomina->sueldo_base = $costo->sueldo_becario;
    		$total = 0;
    		foreach($becario->factlibros as $factlibro)
    		{
    			$total = $total + $factlibro->costo;
    		}
            $nomina->monto_libros = $total;
    		$nomina->total = $nomina->sueldo_base + $nomina->retroactivo + $total;
    		$nomina->mes = $mes;
    		$nomina->year = $anho;
    		$nomina->status = 'pendiente';
    		$nomina->fecha_pago = null;
    		$nomina->fecha_generada = null;
    		$nomina->save();

    		$bn = new BecarioNomina();
    		$bn->user_id = $becario->user_id;//--becario_id
    		$bn->nomina_id = $nomina->id;
    		$bn->save();

    	}


       /* $control->cont = $control->cont+1
        $control->save();*/
        flash("La nómina del ".$mes."/".$anho." fue generada exitosamente.",'success');
    	return  redirect()->route('nomina.listar');
    }

    public function pdf($mes,$anho)
    {
        $nominas = Nomina::where('mes',$mes)->where('year',$anho)->get(); 

        $pdf = PDF::loadView('sisbeca.nomina.pdf', compact('nominas','mes','anho'));

        return $pdf->download('listado.pdf');
    }

    public function cambiar()
    {
    	return -9;
    }
}
