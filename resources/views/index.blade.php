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
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div id="carouselNoticiasIndicadores" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#carouselNoticiasIndicadores" data-slide-to="0" class="active"></li>
                           <li data-target="#carouselNoticiasIndicadores" data-slide-to="1"></li>
                           <li data-target="#carouselNoticiasIndicadores" data-slide-to="2"></li>
                           <li data-target="#carouselNoticiasIndicadores" data-slide-to="3"></li>
                           <li data-target="#carouselNoticiasIndicadores" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="row">
                                 <div class="col-md-12 col-sm-12">
                                    <div id="noticias" class="noticias-item">
                                       <!--testimonial-item-->
                                       <div class="noticias-text">
                                          <img src="{{asset('info_sitio/img/imgnoticias/noticia1.jpg')}}" alt="Noticia 1" />
                                          <h3>Más de 2000 personas se congregaron en la FEI 2017 de AVAA</h3>
                                          <p style="text-align:justify;">En la celebración de sus 75 años de labor ininterrumpida brindando información oportuna, objetiva y real sobre oportunidades de estudio en Estados Unidos y Canadá la Asociación Venezolano Americana de Amistad (AVAA) llevó a cabo el pasado 30 de septiembre, su XXV Feria Educativa Internacional 2017, donde más 20 instituciones académicas nacionales e internacionales se hicieron presentes...</p>
                                          <a href="" class="btn btn-primary noticiasboton">Mas informacion</a>
                                          <br/><br/>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item ">
                              <div class="row">
                                 <div class="col-md-12 col-sm-12">
                                    <div id="noticias" class="noticias-item">
                                       <!--testimonial-item-->
                                       <div class="noticias-text">
                                          <img src="{{asset('info_sitio/img/imgnoticias/noticia2.jpg')}}" alt="Noticia 2" />
                                          <h3>Hastrid Pardi, una versión mejorada de sí misma</h3>
                                          <p style="text-align:justify;">Hastrid Pardi, la becaria de ProExcelencia de la Asociación Venezolano Americana de Amistad (AVAA), y estudiante de Ingeniería Mecánica en la Universidad Metropolitana, fue seleccionada para cursar un cuatrimestre de su carrera en la Universidad de Wyoming, Estados Unidos, gracias al ProgramaIntercambio Global a Nivel Universitario (UGRAD), iniciativa educacional del Gobierno de los Estados Unidos de América a través del Buró de Asuntos Culturales y Educativos (ECA) del Departamento de Estado...</p>
                                          <a href="" class="btn btn-primary noticiasboton">Mas informacion</a>
                                          <br/><br/>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="row">
                                 <div class="col-md-12 col-sm-12">
                                    <div id="noticias" class="noticias-item">
                                       <!--testimonial-item-->
                                       <div class="noticias-text">
                                          <img src="{{asset('info_sitio/img/imgnoticias/noticia3.jpg')}}" alt="Noticia 3" />
                                          <h3>Chevron y AVAA preparados para los 18 hoyos por la educación</h3>
                                          <p style="text-align:justify;">En el marco de la celebración de los 75 años de nuestra Asociación Venezolano Americana de Amistad (AVAA), una vez más llevaremos a cabo, como de costumbre, el Torneo de Golf de la Amistad, “Copa Chevron”, en su edición XXXVI , los días 21 y 23 de noviembre en el campo del Valle Arriba Golf Club (VAGC)...</p>
                                          <a href="" class="btn btn-primary noticiasboton">Mas informacion</a>
                                          <br/><br/>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="row">
                                 <div class="col-md-12 col-sm-12">
                                    <div id="noticias" class="noticias-item">
                                       <!--testimonial-item-->
                                       <div class="noticias-text">
                                          <img src="{{asset('info_sitio/img/imgnoticias/noticia4.jpg')}}" alt="Noticia 4" />
                                          <h3>AVAA MUN 2017 regresó por la democracia y el compromiso social</h3>
                                          <p style="text-align:justify;">En aras de seguir formando ciudadanos integrales, la Asociación Venezolano Americana de Amistad (AVAA), llevó a cabo la tercera edición del Modelo de Naciones Unidas (AVAA MUN) bajo el liderazgo de  becarios de ProExcelencia, los días 5 y 6 de noviembre en los espacios del IESA...</p>
                                          <a href="" class="btn btn-primary noticiasboton">Mas informacion</a>
                                          <br/><br/>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="row">
                                 <div class="col-md-12 col-sm-12">
                                    <div id="noticias" class="noticias-item">
                                       <!--testimonial-item-->
                                       <div class="noticias-text">
                                          <img src="{{asset('info_sitio/img/imgnoticias/noticia5.jpeg')}}" alt="Noticia 5" />
                                          <h3>Sofía Colina, egresada ProExcelencia: Ser venezolano, el reflejo del becario AVAA</h3>
                                          <p style="text-align:justify;">Jonathan Castro, Licenciado en Biología de la Universidad Simón Bolívar. Su hermana pasó por una crisis de salud necesitando muchos donantes de sangre. Después de ese duro momento, Jonathan creó el programa “Un voluntario por la vida”. Hoy en día, cada tres meses nuestros becarios acompañados de quienes logren motivar, donan sangre para salvar vidas...</p>
                                          <a href="" class="btn btn-primary noticiasboton">Mas informacion</a>
                                          <br/><br/>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselNoticiasIndicadores" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselNoticiasIndicadores" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
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
            <div align="center" class="section" data-stellar-background-ratio="0.1">
               <br/><br/>
               <div class="container" >
                  <div class="row justify-content-md-center">
                     <div class="col-md-12">
                        <div class="touch-slider owl-carousel owl-theme">
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>COLUMBIA WEST</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/logocolumbia.jpg')}}" alt="COLUMBIA WEST" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>SIENA</h5>
                                 <img class="img-fluid" width="200" height="200"   src="{{asset('info_sitio/img/org/siena.png')}}" alt="SIENA" />
                              </a>
                           </div>
			 

                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>W&J COLLEGE</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/wjcollege.png')}}" alt="W&J COLLEGE" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>GUARD.ME</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/logoguardme.jpg')}}" alt="GUARD.ME" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>UOIT</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/uoit.jpg')}}" alt="UOIT" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>SONOMA</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/sonoma.png')}}" alt="SONOMA" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>SELNATE</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/selnateint.png')}}" alt="SELNATE" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>UA</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/alabama.png')}}" alt="UA" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>KAPLAN</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/kaplan.png')}}" alt="KAPLAN" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>UMC</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/umc.jpg')}}" alt="UMC" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>ROUNDTRIP</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/LogoRoundtripEducation.jpg')}}" alt="ROUNDTRIP" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>KING'S COLLEGE</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/KingsCollege.jpg')}}" alt="KING'S COLLEGE" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>ILAC </h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/LogoILAC.jpg')}}" alt="ILAC" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>EF</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/ef.jpg')}}" alt="EF" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>ACCESS</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/access.jpg')}}" alt="ACCESS" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>SGIC</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/saintgeorge.png')}}" alt="SGIC" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>ELS</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/els.jpg')}}" alt="ELS" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>SEGUNDO IDIOMA</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/logosegundoidioma.jpg')}}" alt="SEGUNDO IDIOMA" />
                              </a>
                           </div>
                           <div class="client-logo item col-lg-12 col-sm-12 col-xs-6">
                              <a href="#">
                                 <h5>GEORGIA TECH</h5>
                                 <img class="img-fluid" width="200" height="200"  src="{{asset('info_sitio/img/org/georgiatech.png')}}" alt="GEORGIA TECH" />
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
                        <h2>PROEXCELENCIA AVAA</h2>
                        <span><img src="{{asset('info_sitio/img/testimonial/proexcelencia.jpg')}}" alt="ProExcelencia AVAA" /></span>
                        <ul>
                           <li>
                              <p align="justify">Propuesta educativa que promueve la formación integral de jóvenes venezolanos de medianos o bajos recursos económicos durante los cinco años de carrera universitaria.</p>
                           </li>
                        </ul>
                     </div>
                     <div class="plan-button">
                        <a href="{{asset(route('programas'))}}#ProExcelencia" class="btn btn-common">+Información</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="pricing-table">
                     <div class="pricing-details">
                        <h2>AVAA INC</h2>
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
                        <h2>ASESORÍAS EDUCATIVAS</h2>
                        <span><img src="{{asset('info_sitio/img/testimonial/asesorias.jpg')}}" alt="Asesorias educativas" /></span>
                        <ul>
                           <li>
                              <p align="justify">El servicio de atención a interesados en cursar estudios en Estados Unidos o Canadá, prestado como centro oficial de asesorías de las embajadas de estos países.</p>
                              <br/>
                           </li>
                        </ul>
                     </div>
                     <div class="plan-button">
                        <a href="{{asset(route('programas'))}}#asesoriaEducativa" class="btn btn-common">+Información</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Section de Programas -->

@endsection