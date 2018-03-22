@extends('web_site.layouts.main')

@section('title', "Noticias")
@section('content')
      <!-- Inicio de Seccion Principal -->
      <section id="seccionPrincipal" class="section" data-stellar-background-ratio="0.2">
         <br/><br/><br/>
         <div class="container">
            <div class="section-header">
               <h2 class="section-title">Noticias</h2>
               <hr class="lines">
               <p class="section-subtitle">La Asociación Venezolano Americana de Amistad (AVAA) es una ONG con más de 73 años de trayectoria en el desarrollo de propuestas de inversión social en educación, tiempo en el cual ha beneficiado a más de 800 jóvenes de escasos recursos económicos y con alto potencial académico. </p>
               <p class="section-subtitle" >
                  AVAA promueve la educación y formación integral dejóvenes venezolanos durante sus cinco años de carrera universitaria a través del programa de Excelencia AVAA:PROEXCELENCIA.
               </p>
            </div>
            <div class="row">
               <div class="col-lg-2 col-md-3 col-xs-4"></div>
               <div class="col-lg-8 col-md-6 col-xs-4">
                  <div class="container">
                     <div class="row" id="contentPrincipal">
                        <div class="col-lg-2 col-sm-2 col-xs-2 box-item"></div>
                        <div class="col-lg-8 col-sm-8 col-xs-8 box-item">
                           <a class="page-scroll" href="#Noticias">
                           <span class="icon">
                           <i class="lnr lnr-eye"></i>
                           </span>
                           </a>
                           <div class="text">
                              <h4>Informese de esto y más en la sección de Noticias</h4>
                           </div>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-xs-2 box-item"></div>
                     </div>
                  </div>
               </div>
                <div class="col-lg-2 col-md-3 col-xs-4"></div>

            </div>
         </div>
      </section>
      <!--Inicio de Sesion de Miembros institucionales -->
      <section id="Noticias" class="section">
         <div class="container">
            <div class="section-header">
               <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Sección de Noticias</h2>
               <hr class="lines wow zoomIn" data-wow-delay="0.3s">
               <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><strong>Artículos relacionados con Proexcelencia AVAA de educación integral en Venezuela</strong></p>
            </div>

            <div class="row letrasResponsive">
               <div class="side-center col-sm-12 col-md-12">


                  <!-- Buscador de Noticias -->
                  <div class="row">
                     <div class="col-lg-8 col-md-6 "></div>
                     <div class="col-lg-4 col-md-6 ">

                     <form action="{{route('noticias')}}" name="createPost" accept-charset="UTF-8"method="GET" >
                     <label class="control-label" for="titulo">Busqueda</label>
                        <div class="form-group input-group">
                           <input id="titulo" name="titulo" type="text" value="{{$titulo}}" class="form-control">
                           <span class="input-group-btn"><button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button></span>
                        </div>

                     </form>



                     </div>
                  </div>
                  <hr/>
                   @if( $num_noticias != 0)
                  <ul class="list-group">
                      @foreach( $noticias as $noticia)
                          <li class="list-group-item" style="margin-left: 85px;border: none">
                              <p style=" margin-bottom: 0px"><a href="#"><strong>{{$noticia->titulo}}</strong></a></p>
                          </li>
                      @endforeach

                  </ul>
                   @else
                       <h6 align="center" style="font-weight: bold;background-color: rgba(115,171,217,0.1)">No se Encontraron Resultados...</h6>
                       @endif
                  <br/>
                  <hr/>
                   <div class="text-center">
                       {!! $noticias->render() !!} {{--Esto por lo del paginado--}}
                   </div>
               </div>
            </div>
         </div>
      </section>


   @endsection
@section('personaljs')


@endsection