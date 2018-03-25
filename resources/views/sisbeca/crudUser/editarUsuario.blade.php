@extends('sisbeca.layouts.main')
@section('title','Mantenimiento Usuario')
@section('subtitle','Editar Usuario')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="fa fa-user fa-fw"></span> Editar</div>

                <div class="panel-body">
                    <form method="POST" action={{route('mantenimientoUser.update',$user->id)}} accept-charset="UTF-8">


                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input class="form-control" placeholder="Nombre..." value="{{$user->name}}" required name="name" type="text" id="name">
                        </div>

                        <div class="form-group">
                            <label for="cedula">Cedula</label>
                            <input class="form-control" placeholder="Cedula..." value="{{$user->cedula}}" name="cedula" type="text" id="cedula">
                        </div>

                        <div class="form-group">
                            <label for="rol">Rol</label>
                            <select class="form-control" required id="rol" name="rol">
                                <option value=''>Seleccione</option>
                                @if($user->rol=='directivo')
                                    <option selected value='directivo'>Directivo</option>
                                @else
                                    <option value='directivo'>Directivo</option>
                                @endif

                                @if($user->rol=='editor')
                                    <option selected value='editor'>Coordinador Educativo</option>
                                @else
                                    <option value='editor'>Coordinador Educativo</option>
                                @endif

                                @if($user->rol=='coordinador')
                                    <option selected value='coordinador'>Coordinador General</option>
                                @else
                                    <option value='coordinador'>Coordinador General</option>
                                @endif



                            </select>
                        </div>

                        <div class="form-group">
                            <label for="cedula">Correo Electronico</label>
                            <input class="form-control" placeholder="Email..." value="{{$user->email}}" required name="email" type="email" id="email">
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input class="form-control" required name="password" type="password" id="password">
                        </div>

                        <div class="form-group" align="center">
                            <button onclick="Regresar()" class="btn btn-default" type="button" >Cancelar</button>&nbsp;&nbsp;

                            <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('personaljs')
<script type="text/javascript">

    function Regresar() {

        var route= "{{route('mantenimientoUser.index')}}";


        location.assign(route);

    }
</script>
@endsection


          