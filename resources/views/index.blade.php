@extends('web_site.layouts.main')
@section('title','Home')
@section('content')
      <!-- Inicio de Seccion Principal -->
      <section id="seccionPrincipal" class="section" data-stellar-background-ratio="0.2">
         <br/><br/><br/>
         <div class="container">
            <div class="section-header">
               <h2 class="section-title">Home</h2>
               <hr class="lines">
               <p class="section-subtitle">La Asociación Venezolano Americana de Amistad es una organización no gubernamental fundada en 1942. Desde su fundación ha promovido actividades orientadas a reforzar los lazos de muchos años de amistad entre los pueblos de Venezuela, Canadá y Estados Unidos.</p>
               <p class="section-subtitle">
                  El Programa Excelencia AVAA promueve la educación y formación integral de jóvenes venezolanos de medianos o bajos recursos económicos.
               </p>
            </div>
            <div class="row">
            	<div class="col-lg-2 col-md-3 col-xs-4"></div>
               <div class="col-lg-8 col-md-6 col-xs-4">
                  <div class="container">
                     <div id="contentPrincipal" class="row">
                        <div class="col-lg-4 col-sm-4 col-xs-4 box-item">
                           <a class="page-scroll" href="#noticias">
                           <span class="icon">
                           <i class="lnr lnr-layers"></i>
                           </span>
                           </a>
                           <div class="text">
                              <h4>Noticias</h4>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-4 box-item">
                           <a class="page-scroll" href="#MiembrosInstitucionales">
                           <span class="icon">
                           <i class="lnr lnr-users"></i>
                           </span>
                           </a>
                           <div class="text">
                              <h4>Miembros</h4>
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-4 box-item">
                           <a class="page-scroll" href="#programasAVAA">
                           <span class="icon">
                           <i class="lnr lnr-laptop-phone"></i>
                           </span>
                          </a>
                           <div class="text">
                              <h4>Programas</h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               	<div class="col-lg-2 col-md-3 col-xs-4"></div>
            </div>
         </div>
      </section>
      <!-- Fin de Seccion Principal -->  
      <!-- Seccion de Noticias -->

       <div class="container">
       	<div class="row">


              <div class="col-lg-8 col-md-8 col-xs-8">
                <section id="noticias" class="section">
                  <div class="container">
                     <div class="section-header">
                        <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Noticias </h2>
                        <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                        <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">En esta sección se ubicaran las noticias mas actuales del programa AVAA.</p>
                     </div>
                     @if($cantidad!=0)
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div id="carouselNoticiasIndicadores" class="carousel slide" data-ride="carousel">
                                 <ol class="carousel-indicators">
                                    @for($i=0;$i<$cantidad;$i++)
                                       @if($i==0)
                                           <li data-target="#carouselNoticiasIndicadores" data-slide-to="{{$i}}" class="active"></li>
                                       @else
                                           <li data-target="#carouselNoticiasIndicadores" data-slide-to={{$i}}></li>
                                       @endif
                                    @endfor
                                 </ol>
                                 <div class="carousel-inner">

                                    @for($i=0;$i<$cantidad;$i++)
                                             @if($i==0)
                                                <div class="carousel-item active">
                                             @else
                                                <div class="carousel-item ">

                                             @endif

                                             <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                   <div id="noticias" class="noticias-item">
                                                      <!--testimonial-item-->
                                                      <div class="noticias-text">
                                                         <img class="img-responsive"  src="{{asset($noticias->get($i)['url_imagen'])}}" title="{{$noticias->get($i)['titulo']}}" alt="{{$noticias->get($i)['titulo']}}" />
                                                         <p class="title-noticia">{{$noticias->get($i)['titulo']}}</p>
                                                         <p class="contenido" style="text-align:justify;">
                                                            {{substr(strip_tags($noticias->get($i)['contenido']), 0, 250).'...'}}
                                                         </p>
                                                         <div class="plan-button">
                                                         <a href="{{route('showNoti',$noticias->get($i)['id'])}}" title="Mas Información" class="btn btn-common"><i class="fa fa-plus"></i> <span class="mas-informacion">Mas Información</span></a>
                                                         </div>
                                                         <br/>

                                                      </div>
                                                   </div>
                                                </div>
                                             </div>

                                             @if($i==0)
                                                </div>
                                             @else
                                                </div>
                                             @endif


                                    @endfor

                                 </div>
                                 <a class="carousel-control-prev" href="#carouselNoticiasIndicadores" role="button" data-slide="prev">
                                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="sr-only">Anterior</span>
                                 </a>
                                 <a class="carousel-control-next" href="#carouselNoticiasIndicadores" role="button" data-slide="next">
                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="sr-only">Siguiente</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  @else
                        <h6 align="center" style="font-weight: bold;background-color: rgba(115,171,217,0.1)">No se Encontraron Noticias Registradas</h6>
                  @endif

                  </div>
               </section>
           </div>



<div class="col-lg-4 col-md-4 col-xs-4 notiasresponsive">
  <table id="tablaUnica" class="table table-striped unica">
    <tbody>
    <tr>
        <td class="filterable-cell" width="100%"><a class="twitter-timeline" href="https://twitter.com/Avaa_org?ref_src=twsrc%5Etfw">Tweets de Avaa_org</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></td>

    </tr>
    </tbody>
</table>
</div>
</div>
</div>
      <!-- Fin de Sesion de Noticias -->



      <section id="MiembrosInstitucionales" class="section">
         <div class="container">
            <div class="section-header">
               <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Miembros Institucionales </h2>
               <hr class="lines wow zoomIn" data-wow-delay="0.3s">
               <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">En esta sección se listaran las entes institucionales de la AVAA.</p>
            </div>

            @if($cantM > 0)
            <div align="center" class="section" data-stellar-background-ratio="0.1">
               <br/><br/>
               <div class="container" >
                  <div class="row justify-content-md-center">
                     <div class="col-md-12">
                        <div class="touch-slider owl-carousel owl-theme">

                           @foreach($miembros as $miembro)
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="{{route('showNoti',$miembro->id)}}">
                                 <p class="title-miembros-institucionales">{{$miembro->titulo}}</p>
                                 <img class="img-fluid img-responsive"   src="{{asset($miembro->url_imagen)}}" alt="{{$miembro->titulo}}" />
                              </a>
                           </div>
                              @endforeach
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            @else
                  <h6 align="center" style="font-weight: bold;background-color: rgba(115,171,217,0.1)">No se Encontraron Miembros Institucionales Registrados</h6>
            @endif
         </div>
      </section>

      <!-- Organizaciones -->
      <section id="organizaciones" class="section">
         <div class="container">
            <div class="section-header">
               <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Organizaciones</h2>
               <hr class="lines wow zoomIn" data-wow-delay="0.3s">
               <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Institutos Internacionales relacionadas con el programa AVAA</p>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-6">
                  <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
                     <a href="#"><img src="{{asset('info_sitio/img/educationusa.jpg')}}" height="70%" width="70%" alt="Educación USA" /></a>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6">
                  <div class="item-boxes wow fadeInDown" data-wow-delay="0.6s">
                     <a href="#"><img src="{{asset('info_sitio/img/canada.jpg')}}"  height="70%" width="70%" alt="Educación Canadá" /></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Fin Section Organizaciones -->
      <!-- End Video Promo Section -->
      <section id="programasAVAA" class="section">
         <div class="container">
            <div class="section-header">
               <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Programas AVAA </h2>
               <hr class="lines wow zoomIn" data-wow-delay="0.3s">
               <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">La Asociación Venezolano Americana de Amistad desarrolla tres programas sociales en el área educativa.</p>
            </div>
            <div class="row pricing-tables letrasResponsive">
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="pricing-table">
                     <div class="pricing-details">
                        <h2 class="title-miembros-institucionales">PROEXCELENCIA AVAA</h2>
                        <span><img src="{{asset('info_sitio/img/testimonial/proexcelencia.jpg')}}" alt="ProExcelencia AVAA" /></span>
                        <ul>
                           <li>
                              <p align="justify">Propuesta educativa que promueve la formación integral de jóvenes venezolanos de medianos o bajos recursos económicos durante los cinco años de carrera universitaria.</p>
                           </li>
                        </ul>
                     </div>
                     <div class="plan-button">
                        <a href="{{asset(route('programas'))}}#ProExcelencia" title="Mas Información" class="btn btn-common"><i class="fa fa-plus"></i> <span class="mas-informacion">Mas Información</span></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="pricing-table">
                     <div class="pricing-details">
                        <h2 class="title-miembros-institucionales">AVAA INC</h2>
                        <span><img src="{{asset('info_sitio/img/testimonial/avaainc.jpg')}}" alt="Avaa Internacional" /></span>
                        <ul>
                           <li>
                              <p align="justify">En AVAA buscamos promover y fomentar el intercambio educativo y cultural entre Venezuela, Estados Unidos y Canadá. Para ello, con la certificación y apoyo de las embajadas de estos países.</p>
                              <br/><br/>
                           </li>
                        </ul>
                     </div>
                     <div class="plan-button">
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="pricing-table">
                     <div class="pricing-details">
                        <h2 class="title-miembros-institucionales">ASESORÍAS EDUCATIVAS</h2>
                        <span><img src="{{asset('info_sitio/img/testimonial/asesorias.jpg')}}" alt="Asesorias educativas" /></span>
                        <ul>
                           <li>
                              <p align="justify">El servicio de atención a interesados en cursar estudios en Estados Unidos o Canadá, prestado como centro oficial de asesorías de las embajadas de estos países.</p>
                              <br/>
                           </li>
                        </ul>
                     </div>
                     <div class="plan-button">
                        <a href="{{asset(route('programas'))}}#asesoriaEducativa" title="Mas Información" class="btn btn-common"><i class="fa fa-plus"></i> <span class="mas-informacion">Mas Información</span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Section de Programas -->

@endsection