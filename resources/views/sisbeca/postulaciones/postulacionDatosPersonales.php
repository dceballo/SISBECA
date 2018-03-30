
@extends('sisbeca.layouts.main')
@section('title','Mantenimiento Articulos')
@section('subtitle','Datos Personales')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-9 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"  align="center"><h2>Postalarse como Mentor</h2></div>

                    <div class="panel-body">

                        <form role="form" class="f1 formMultiple" method="post" action="{{ route('registerMentor') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="f1-steps">
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="50" data-number-of-steps="5" style="width: 10%;"></div>
                                </div>

                                <!-- .............Datos Personales.............. -->
                                <div class="f1-step active">
                                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                    <p>Cuenta</p>
                                </div>
                                <!-- .............Estudios Secundarios.............. -->
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                    <p>Estudios Secundarios</p>
                                </div>
                                <!-- ............. Estudios Universitarios ............. -->
                                 <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                    <p>Estudios Universitarios</p>
                                </div>
                                <!-- ............... Información Adicional ............. -->
                                 <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                    <p>Personal</p>
                                </div>
                                <!-- ..................Documentos................... -->
                                 <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                    <p> Carga de Documentos</p>
                                </div>
                            </div>
                            {{-------------------------------- Datos de Cuenta --------------------------}}

                            <fieldset>
                                <h4>Creacion de Cuenta:</h4>


                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="text" name="email" placeholder="Email..." class="f1-email form-control" id="f1-email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="sr-only" for="password">Contraseña</label>
                                    <input type="password" name="password" placeholder="Contraseña..." class="f1-password form-control" id="f1-password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Repetir Contraseña</label>
                                    <input type="password" placeholder="Repetir Contraseña..."
                                           class="f1-repeat-password form-control" id="f1-repeat-password" name="password_confirmation" required>
                                </div>
                                <div class="f1-buttons">

                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                            </fieldset>
                            {{-------------------------------- Datos Personales --------------------------}}
                            <fieldset>
                                <h4>Complete sus Datos Personales:</h4>
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="sr-only" for="name">Nombre</label>
                                    <input type="text" name="name" placeholder="Nombre..." class="f1-first-name form-control" id="f1-first-name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <label class="sr-only" for="lastname">Apellido</label>
                                    <input type="text" name="lastname" placeholder="Apellido..." class="form-control" id="f1-first-lastname" value="{{ old('lastname') }}" required autofocus>

                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="cedula">Cedula</label>
                                    <input type="text" value="{{ old('cedula') }}" name="cedula" placeholder="Cedula..." class="form-control" id="cedula">
                                </div>


                                <div class="form-group">
                                    <label class="sr-only" for="fnacimiento">Fecha de Nacimiento</label>
                                    <input type="text" name="fnacimiento" placeholder="Fecha de Nacimiento..." class="form-control" id="fnacimiento">
                                </div>

                                <div class="form-group">
                                     <label for="url_pdf">Cargue su Hoja de Vida:</label>
                                      <div>
                                          <input required name="url_pdf" accept="pdf/*" type="file" id="url_pdf">
                                      </div>
                                </div>

                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Anterior</button>
                                    <button type="submit" class="btn btn-next">Postularse</button>
                                </div>
                            </fieldset>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- End Wrapper -->
<!-- All Jquery -->

@include('sisbeca.layouts.partials.filesjs')

</body>

</html>
