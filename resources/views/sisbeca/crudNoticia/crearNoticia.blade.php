@extends('sisbeca.layouts.main')
@section('title','Mantenimiento Articulos')
@section('subtitle','Crear Articulo')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="fa fa-list-alt fa-fw"></span> Nuevo Articulo</div>

                <div class="panel-body">

                <form action="{{route('mantenimientoNoticia.store')}}" accept-charset="UTF-8" enctype="multipart/form-data" method="POST" >
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input class="form-control" placeholder="Titulo..." value="{{old('titulo')}}" required name="titulo" type="text" id="titulo">
                    </div>
                    <div class="form-group">
                        <label for="informacion_contacto">Inf. del Contacto o Publicador</label>
                        <input class="form-control" placeholder="Información del Contacto o Publicador..." value="{{old('informacion_contacto')}}" required name="informacion_contacto" type="text" id="informacion_contacto">
                    </div>


                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control " required id="tipo" name="tipo">
                            <option value='noticia'>Noticia</option>
                            <option value='articulo'>Articulo</option>
                        </select>
                    </div>

                    <div class="form-group rendered" >
                        <div class="form-group">
                            <label for="url_articulo">URL Articulo</label>
                            <input class="form-control" required placeholder="URL Articulo..." value="{{old('url_articulo')}}" name="url_articulo" type="url" id="url_articulo">
                        </div>

                    </div>

                    <div class="form-group rendered" >
                        <div class="form-group">
                            <label for="es_miembro_institucional">Es un Miembro Institucional</label>
                            <select class="form-control " id="es_miembro_institucional" name="es_miembro_institucional">
                                <option value='0'>No</option>
                                <option value='1'>Si</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group rendered2" >
                        <div class="form-group">
                            <label for="email_contacto">Email del contacto</label>
                            <input class="form-control" placeholder="Email del Contacto..." value="{{old('email_contacto')}}" name="email_contacto" type="email" id="email_contacto">
                        </div>

                    </div>

                    <div class="form-group rendered2" >
                        <div class="form-group">
                            <label for="telefono_contacto">Telefono del contacto</label>
                            <input class="form-control" placeholder="Telefono del Contacto..." value="{{old('telefono_contacto')}}" name="telefono_contacto" type="tel" id="telefono_contacto">
                        </div>

                    </div>



                    <div class="form-group">
                        <label for="image">Seleccione imagen de Noticia/Articulo</label>
                        <div>
                               <input required name="url_imagen" accept="image/*" type="file" id="url_imagen">
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="form-group">
                            <label for="contenido">Contenido</label>
                            <textarea class="textarea_editor form-control" name="contenido" id="contenido" rows="15" placeholder="Ingrese Contenido..." style="height:450px"></textarea>
                        </div>

                    </div>

                    <div class="col-lg-12 " >
                        <div class="form-group text-right" align="center">
                            <button onclick="Regresar()" class="btn btn-default" type="button" >Cancelar</button>&nbsp;&nbsp;

                            <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>

                    </div>
                    

                </form>

                </div>
            </div>

        </div>
    </div>
@endsection

@section('personaljs')
    <script type="text/javascript">

        $(document).ready(function(){

            var mivalor= $("#tipo").val();


            $("#tipo").change(function() {
                mivalor =   $("#tipo").val();
                if(mivalor=='articulo')
                {

                    $(".rendered").show();
                    $("#url_articulo").attr("required", "required")


                }
                else
                {
                   $("#url_articulo").removeAttr('required');
                    document.getElementById("es_miembro_institucional").value=0;
                    document.getElementById("url_articulo").value=null;
                    document.getElementById("email_contacto").value=null;
                    document.getElementById("telefono_contacto").value=null;
                    $(".rendered").hide();
                    $(".rendered2").hide();


                }
            });


            if(mivalor=='articulo')
            {
                $(".rendered").show();
                $("#url_articulo").attr("required", "required")
            }
            else
            {
                $("#url_articulo").removeAttr('required');
                document.getElementById("es_miembro_institucional").value=0;
                document.getElementById("url_articulo").value=null;
                document.getElementById("email_contacto").value=null;
                document.getElementById("telefono_contacto").value=null;
                $(".rendered").hide();
                $(".rendered2").hide();

            }


            //para gestionar si es miembro institucional

            var mi= $("#es_miembro_institucional").val();


            $("#es_miembro_institucional").change(function() {
                mi =   $("#es_miembro_institucional").val();
                if(mi==1)
                {
                    $(".rendered2").show();

                }
                else
                {
                    document.getElementById("email_contacto").value=null;
                    document.getElementById("telefono_contacto").value=null;
                    $(".rendered2").hide();
                }
            });


            if(mi==1)
            {
                $(".rendered2").show();
            }
            else
            {
                document.getElementById("email_contacto").value=null;
                document.getElementById("telefono_contacto").value=null;
                $(".rendered2").hide();

            }

        });

        function Regresar() {

            var route= "{{route('mantenimientoNoticia.index')}}";


            location.assign(route);

        }
    </script>
    @endsection

@section('editorjs')
    @include('sisbeca.layouts.partials.editorjs')



@endsection
