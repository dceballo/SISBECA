@extends('sisbeca.layouts.main')
@section('title','Inicio')
@section('subtitle','Lista de Usuarios')
@section('content')
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-body"> <a href="{{ route('mantenimientoUser.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a> </div>
            <br/>

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
                                <a href="{{route('mantenimientoUser.edit',$user->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-duplicate" aria-hidden="true">Editar</span></a>
                                <a href="{{route('mantenimientoUser.destroy',$user->id)}}" class="btn btn-warning" onclick="return confirm('¿Seguro que desea borrar este elemento?');"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true">Eliminar</span></a>

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


@endsection
          