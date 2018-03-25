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
                <table class="table table-hover table-striped datatable" id="dt_user">
                    <thead>

                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Rol</th>
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

                <p align="center">¿Esta seguro que desea Eliminar el siguiente Usuario?</p>
                    <input id="id"  hidden>


                <div class="form-group form-modal-none">
                  <strong> Nombre:</strong> <input id="name" class="input-modal-none" disabled></div>
                <div class="form-group form-modal-none">
                    <strong> Email:</strong> <input id="email" class="input-modal-none" disabled></div>
                <div class="form-group form-modal-none">
                    <strong>Cedula:</strong> <input id="cedula" class="input-modal-none" disabled></div>




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
                ajax: '{{route('datatable/getdata')}}',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'rol', name: 'rol'},
                   {
                        data:null,
                       searchable:false,
                        defaultContent: "<button type='button' class='edit btn btn-primary'><i class='fa fa-pencil-square-o'></i></button>&nbsp;&nbsp;<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modal-default' ><i class='fa fa-trash-o'></i></button> ",
                        orderable: false
                    },



                ]
            });


                    Mostrar('#dt_user tbody',table);
                  obtener_data_eliminar("#dt_user tbody",table);


        });

        var Mostrar= function (tbody,table) {
            $(tbody).on('click','button.edit',function () {
                var data= table.row($(this).parents('tr')).data();
                //console.log(data.id);
                var route= "{{asset('sisbeca/mantenimientoUser/')}}/"+data.id+'/edit';


                location.assign(route);
            });

        }


        var obtener_data_eliminar= function (tbody,table) {
            $(tbody).on('click','button.eliminar',function () {
                var data= table.row($(this).parents('tr')).data();

                var id = $('#id').val(data.id);
                var name = $('#name').val(data.name);
                var cedula = $('#cedula').val(data.cedula);
                var email = $('#email').val(data.email);



            });

        }

        function eliminar() {
            var id=  $("#id").val();


            var route= "{{asset('sisbeca/mantenimientoUser/show')}}";


            $.ajax({
                url: route,
                beforeSend: function() {
                    $('.preloader').show();
                },
                complete: function(){
                    location.assign( "{{asset('sisbeca/mantenimientoUser/')}}/"+id+'/destroy');
                }
            });

        }


    </script>

    @endsection

          