{{Auth::check()}}
{{-- aqui en este extends esta  la funcion Auth::check() que autentifica si el usuario ya inicio sesion y lo redirige a la pagina principal del sistema --}}
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('info_sitio/img/favicon.png')}}" >
    <title>Avaa - Registrarse</title>

    @include('sisbeca.layouts.filescss')
</head>

<body class="fix-header fix-sidebar">
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">
    <div class="header">
        @include('sisbeca.layouts.navtop')
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-9 col-md-offset-2 card">
                <div class="panel panel-default">
                    <div class="panel-heading"  align="center"><h2>Registrarse</h2></div>

                    <div class="panel-body">

                    <form role="form" class="f1 formMultiple" method="post" action="{{ route('register') }}">
                        {{ csrf_field() }}


                        <div class="f1-steps">
                            <div class="f1-progress">
                                <div class="f1-progress-line" data-now-value="11" data-number-of-steps="4" style="width: 11%;"></div>
                            </div>
                            <div class="f1-step active">
                                <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                <p>Cuenta</p>
                            </div>

                            <div class="f1-step ">
                                <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                <p>Personal</p>
                            </div>

                            <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                                <p>Redes Sociales</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-search"></i></div>
                                <p>Referencias</p>
                            </div>

                        </div>


                        <fieldset>
                            <h4>Creacion de Cuenta:</h4>

                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="sr-only" for="name">Nombre</label>
                                <input type="text" name="name" placeholder="Nombre..." class="f1-first-name form-control" id="f1-first-name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

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

                        <fieldset>
                            <h4>Complete sus Datos Personales:</h4>

                            <div class="form-group">
                                <label class="sr-only" for="cedula">Cedula</label>
                                <input type="text" name="cedula" placeholder="Cedula..." class="form-control" id="cedula">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-about-yourself">Acerca de ti</label>
                                <textarea name="f1-about-yourself" placeholder="Acerca de ti..."
                                          class="f1-about-yourself form-control textareaMultiple" id="f1-about-yourself"></textarea>
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h4>Redes Sociales:</h4>
                            <div class="form-group">
                                <label class="sr-only" for="f1-facebook">Facebook</label>
                                <input type="text" name="f1-facebook" placeholder="Facebook..." class="f1-facebook form-control" id="f1-facebook">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-twitter">Twitter</label>
                                <input type="text" name="f1-twitter" placeholder="Twitter..." class="f1-twitter form-control" id="f1-twitter">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-google-plus">Google plus</label>
                                <input type="text" name="f1-google-plus" placeholder="Google plus..." class="f1-google-plus form-control" id="f1-google-plus">
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>

                        </fieldset>

                        <fieldset>
                            <h4>Referencias Personales:</h4>
                            <div class="form-group">
                                <label class="sr-only" for="f1-recomendacion1">Referencia 1</label>
                                <input type="text" name="f1-recomendacion1" placeholder="Referencia 1..." class="f1-recomendacion1 form-control" id="f1-recomendacion1">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-recomendacion2">Referencia 2</label>
                                <input type="text" name="f1-recomendacion2" placeholder="Referencia 2..." class="f1-recomendacion2 form-control" id="f1-recomendacion2">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="f1-recomendacion3">Referencia 3</label>
                                <input type="text" name="f1-recomendacion3" placeholder="Referencia 3..." class="f1-recomendacion3 form-control" id="f1-recomendacion3">
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="submit" class="btn btn-submit">Registrar</button>
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

@include('sisbeca.layouts.filesjs')

</body>

</html>
