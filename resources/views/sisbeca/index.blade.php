@extends('sisbeca.layouts.main')
@section('title','Inicio')
@section('subtitle','Bienvenido')
@section('content')

    <div class="jumbotron">
        <h1>Hola, {{ Auth::user()->name}}!</h1>
        <p> Bienvenido al Sistema de Becarios AVAA </p>

    </div>

    <!-- End PAge Content -->
@endsection
          