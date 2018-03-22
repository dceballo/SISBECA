@extends('sisbeca.layouts.main')
@section('title','Inicio')
@section('subtitle','Mantenimiento de Noticias')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="fa fa-list-alt fa-fw"></span> Noticias</div>
                <br/>
                <div class="col-md-6"> <a href="{{ route('mantenimientoNoticia.create') }}" class="btn btn-info">Agregar Noticia</a> </div>
                <div class="col-md-12 basic-form">
                    <!-- Buscador de Noticias -->
                    <form action="{{route('mantenimientoNoticia.index')}}" accept-charset="UTF-8" class="navbar-form pull-right" method="GET" >

                     <div class="form-group">
                        <div class="input-group input-group-rounded">
                            <input type="text" value="{{$titulo}}" name="titulo" id="titulo" class="form-control">
                            <span class="input-group-btn"><button class=" btn btn-primary btn-group-right" type="submit"><i class="ti-search"></i></button></span>
                        </div>
                     </div>

                    </form>

                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <th>Titulo</th>
                        <th>Tipo</th>
                        <th>Contenido</th>
                        <th>Usuario Registro</th>
                        <th>Acción</th>
                        </thead>
                        <body>
                        @foreach( $noticias as $noticia)
                            <tr>
                                <td>
                                    {{$noticia->titulo}}

                                </td>
                                <td>
                                    {{$noticia->tipo}}

                                </td>
                                <td>
                                    {!!substr($noticia->contenido, 0, 20).'...'!!}

                                </td>

                                <td>
                                  {{$noticia->editor->user->name}}

                                </td>
                                <td>
                                    <a title="Editar" href="{{route('mantenimientoNoticia.edit',$noticia->id)}}" class="btn btn-light"><span class="fa fa-edit" aria-hidden="true"></span></a>
                                    <a title="Eliminar" href="{{route('mantenimientoNoticia.destroy',$noticia->id)}}" class="btn btn-inverse" onclick="return confirm('¿Seguro que desea borrar este elemento?');"><span class="fa fa-remove" aria-hidden="true"></span></a>

                                </td>

                            </tr>

                        @endforeach
                        </body>

                    </table>

                    <hr/>
                    <div class="text-center">
                        {!! $noticias->render() !!} {{--Esto por lo del paginado--}}
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
          