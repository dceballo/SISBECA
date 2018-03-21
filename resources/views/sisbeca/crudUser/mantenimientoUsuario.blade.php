@extends('sisbeca.layouts.main')
@section('title','Inicio')
@section('subtitle','Mantenimiento de Noticias')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="fa fa-user fa-fw"></span> Usuarios</div>
                <br/>
                <div class="col-md-6"> <a href="{{ route('mantenimientoUser.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a> </div>

                <div class="panel-body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Tipo</th>
                    <th>Acción</th>
                    </thead>
                    <body>
                    @foreach( $users as $user)
                        <tr>
                            <td>
                                {{$user->name}}

                            </td>
                            <td>
                                {{$user->email}}

                            </td>

                            <td>
                                @if($user->rol=='admin')
                                    <span class="label label-danger">{{$user->rol}}</span>
                                @else
                                    <span class="label label-primary">{{$user->rol}}</span>
                                @endif

                            </td>
                            <td>
                                <a title="Editar" href="{{route('mantenimientoUser.edit',$user->id)}}" class="btn btn-light"><span class="fa fa-edit" aria-hidden="true"></span></a>
                                <a title="Eliminar" href="{{route('mantenimientoUser.destroy',$user->id)}}" class="btn btn-inverse" onclick="return confirm('¿Seguro que desea borrar este elemento?');"><span class="fa fa-remove" aria-hidden="true"></span></a>

                            </td>

                        </tr>

                    @endforeach
                    </body>

                </table>

                    <hr/>
                    <div class="text-center">
                        {!! $users->render() !!} {{--Esto por lo del paginado--}}
                    </div>
                </div>

        </div>
        </div>
    </div>


@endsection
          