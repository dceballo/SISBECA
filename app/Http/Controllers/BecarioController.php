<?php

namespace avaa\Http\Controllers;

use Illuminate\Http\Request;
use avaa\Http\Controllers\Controller;
use avaa\Becario;

class BecarioController extends Controller
{
    public function listar()
    {
    	$becarios = Becario::all();
    	return view('sisbeca.becarios.listar')->with('becarios',$becarios);
    }
}
