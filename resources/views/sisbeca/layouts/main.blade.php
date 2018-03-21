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

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('info_sitio/img/favicon.png')}}" >
    <title>Avaa - Panel de Administración</title>

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
        <!-- header header  -->
        <div class="header">
            @include('sisbeca.layouts.navtop')
        </div>
        <!-- End header header -->
        @include('sisbeca.layouts.menu-lateral')
        
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">@yield('subtitle')</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">@yield('title')</a></li>
                        <li class="breadcrumb-item active">@yield('subtitle')</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
               @yield('content')

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

        </div>
        <!-- footer -->
        <footer class="footer"> © 2018 Todos los derechos reservados. Diseñado por Developers UC-Facyt</footer>
        <!-- End footer -->
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->

   @include('sisbeca.layouts.filesjs')

   @yield('editorjs')
   @yield('formvalidationjs')
   @yield('nestablejs')
   @yield('alertjs')
   @yield('personaljs')


    
</body>

</html>