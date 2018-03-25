@extends('sisbeca.layouts.main')
@section('title','Inicio')
@section('subtitle','Mantenimiento de Articulos')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="fa fa-list-alt fa-fw"></span> Articulos</div>
                <br/>
                <div class="col-md-6"> <a href="{{ route('mantenimientoNoticia.create') }}" class="btn btn-info">Agregar Articulo</a> </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover table-striped datatable" id="dt_noticia">
                        <thead>
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Tipo</th>
                        <th>Usuario Registro</th>
                        <th>Acción</th>
                        </thead>


                    </table>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Confirmación</h4>
                </div>

                <p align="center">¿Esta seguro que desea Eliminar el siguiente Articulo?</p>
                <input id="id"  hidden>


                <div class="form-group form-modal-none">
                    <strong> Titulo:</strong> <input id="titulo" class="input-modal-none" disabled></div>
                <div class="form-group form-modal-none">
                    <strong> Tipo:</strong> <input id="tipo" class="input-modal-none" disabled></div>
                <div class="form-group form-modal-none">
                    <strong>Contenido:</strong> <input id="content" class="input-modal-none" disabled></div>




                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="button" onclick="eliminar()" class="btn btn-danger pull-left" data-dismiss="modal">Eliminar</button>
                </div>

            </div>


        </div>

        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->


@endsection

@section('personaljs')
    <script type="text/javascript">
        $(document).ready(function() {
            var table= $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('datatable/getNoticia',0)}}',
                columns: [
                    {data: 'titulo', name: 'titulo'},
                    {data: 'content', name: 'content'},
                    {data: 'tipo', name: 'tipo'},
                    {data: 'userRegistro', name:'userRegistro',searchable:false,orderable:false},
                    {
                        data:null,
                        searchable:false,
                        defaultContent: "<button type='button' class='edit btn btn-primary'><i class='fa fa-pencil-square-o'></i></button>&nbsp;&nbsp;<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modal-default' ><i class='fa fa-trash-o'></i></button> ",
                        orderable: false
                    },



                ]
            });


            Mostrar('#dt_noticia tbody',table);
            obtener_data_eliminar("#dt_noticia tbody",table);


        });

        var Mostrar= function (tbody,table) {
            $(tbody).on('click','button.edit',function () {
                var data= table.row($(this).parents('tr')).data();
                //console.log(data.id);
                var route= "{{asset('sisbeca/mantenimientoNoticia/')}}/"+data.id+'/edit';


                location.assign(route);
            });

        }


        var obtener_data_eliminar= function (tbody,table) {
            $(tbody).on('click','button.eliminar',function () {
                var data= table.row($(this).parents('tr')).data();

                var id = $('#id').val(data.id);
                var titulo = $('#titulo').val(data.titulo);
                var tipo = $('#tipo').val(data.tipo);
                var content = $('#content').val(data.content);



            });

        }

        function eliminar() {
            var id=  $("#id").val();


            var route= "{{asset('sisbeca/mantenimientoNoticia/show')}}";


            $.ajax({
                url: route,
                beforeSend: function() {
                    $('.preloader').show();
                },
                complete: function(){
                    location.assign("{{asset('sisbeca/mantenimientoNoticia/')}}/"+id+'/destroy');
                }
            });

        }


    </script>

@endsection