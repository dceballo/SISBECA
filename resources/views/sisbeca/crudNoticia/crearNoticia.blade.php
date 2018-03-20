@extends('sisbeca.layouts.main')
@section('title','Mantenimiento Noticia')
@section('subtitle','Crear Noticia')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <br/>
                <form action="#" accept-charset="UTF-8"  method="POST" >
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input class="form-control" placeholder="Titulo..." value="{{old('titulo')}}" required name="titulo" type="text" id="titulo">
                    </div>



                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control " required id="tipo" name="tipo">
                            <option value='noticia'>Noticia</option>
                            <option value='articulo'>Articulo</option>
                        </select>
                    </div>

                    <div class="form-group" id="rendered">
                        <div class="form-group">
                            <label for="url_articulo">URL Articulo</label>
                            <input class="form-control" required placeholder="URL Articulo..." value="{{old('url_articulo')}}" name="url_articulo" type="text" id="url_articulo">
                        </div>

                    </div>




                    <div class="form-group">
                        <div class="form-group">
                            <label for="contenido">Contenido</label>
                            <textarea class="textarea_editor form-control" name="contenido" id="contenido" rows="15" placeholder="Enter text ..." style="height:450px"></textarea>
                        </div>

                    </div>

                </form>
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

                    $("#rendered").show();
                    $("#url_articulo").attr("required", "required")


                }
                else
                {
                   $("#url_articulo").removeAttr('required');
                    document.getElementById("url_articulo").value=null;
                    $("#rendered").hide();


                }
            });


            if(mivalor=='articulo')
            {
                $("#rendered").show();
                $("#url_articulo").attr("required", "required")
            }
            else
            {
                $("#url_articulo").removeAttr('required');
                document.getElementById("url_articulo").value=null;
                $("#rendered").hide();

            }

        });
    </script>
    @endsection

@section('editorjs')
    @include('sisbeca.layouts.editorjs')



@endsection
