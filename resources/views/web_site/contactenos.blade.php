@extends('web_site.layouts.main')

@section('title', "Contáctenos")
@section('content')
      <!-- Inicio de Seccion Principal -->
      <section id="seccionPrincipal" class="section" data-stellar-background-ratio="0.2">
         <br/><br/><br/>
         <div class="container">
            <div class="section-header">
               <h2 class="section-title">Contáctenos</h2>
               <hr class="lines">
               <p class="section-subtitle">También puedes encontrar las respuestas a tus preguntas</p>
               <p class="section-subtitle" > Frequently Asked Questions</p>
               <p class="section-subtitle" >
                  <strong>¿Tienes alguna pregunta sobre el Programa Excelencia AVAA?</strong>
               </p>
               <p class="section-subtitle">  <strong>¿Dudas relacionadas a las asesorías educativas? </strong></p>
               <p class="section-subtitle">
                  Revisa el espacio de FAQs y encuentra las respuesta a las preguntas más comunes.
               </p>
            </div>
            <div class="row">
                    <div class="col-lg-2 col-md-3 col-xs-4"></div>
               <div class="col-lg-8 col-md-6 col-xs-4">
                  <div class="container">
                     <div class="row" id="contentPrincipal">
                         <div class="col-lg-6 col-sm-6 col-xs-6 box-item">
                           <a class="page-scroll" href="#ubicacion">
                           <span class="icon">
                           <i class="lnr lnr-map-marker"></i>
                           </span>
                           </a>
                           <div class="text">
                              <h4>Ubicación</h4>
                           </div>
                        </div>
                         <div class="col-lg-6 col-sm-6 col-xs-6 box-item">
                           <a class="page-scroll" href="#contactenos">
                           <span class="icon">
                           <i class="lnr lnr-magnifier"></i>
                           </span>
                           </a>
                           <div class="text">
                              <h4>Contactos</h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                <div class="col-lg-2 col-md-3 col-xs-4"></div>
            </div>
         </div>
      </section>



      <!-- Seccion de Contactenos -->
      <section id="contactenos" class="section">
         <div class="container">
            <div class="section-header">
               <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Contactos</h2>
               <hr class="lines wow zoomIn" data-wow-delay="0.3s">
               <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">En esta seccion puede escribirnos a nuestros correo ademas se muestran nuestras redes sociales. </p>
            </div>
 
      <!-- Contact Section Start -->
      <section id="contact" class="section" data-stellar-background-ratio="-0.2">
         <div class="contact-form">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                     <div class="contact-us">
                        <h3>Contactenos y Siguenos</h3>
                        <div class="contact-address">
                           <p class="phone box-item">Llámanos: <br/>
                              <span class="icon">
                              <i class="lnr lnr-phone"></i> 0212 235.7821
                              </span>
                           </p>
                           <p class="email">Escríbenos:<br/>
                              <span class="icon">
                              <a href="mailto:info@avaa.org"><i class="lnr lnr-envelope"></i></a>
                              </span><a  style="color:#3d91d6;" href="mailto:info@avaa.org"><strong>info@avaa.org</strong></a> 
                              <br/>
                              <span class="icon">
                              <a href="mailto:info@avaa.org"><i class="lnr lnr-envelope"></i></a>
                              </span><a  style="color:#3d91d6;" href="mailto:prensa@avaa.org"><strong>prensa@avaa.org</strong></a>
                           </p>
                        </div>
                        <span id="siguenos" class="icon">
                        <i class="lnr lnr-thumbs-up"></i> Siguenos
                        </span>
                        <div class="social-icons">
                           <ul>
                              <li style="padding-left: 15px; " class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li style="padding-left: 5px;" class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                     <div class="contact-block">
                        <form id="contactForm">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su Nombre" required data-error="Introduzca su Nombre">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <input type="text" placeholder="Ingrese su Email" id="email" class="form-control" name="name" required data-error="Introduzca su Email">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Escriba su Mensaje" rows="8" data-error="Escriba su mensaje" required></textarea>
                                    <div class="help-block with-errors"></div>
                                 </div>
                                 <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">Enviar Mensaje</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
              </div>
      </section>
      <!-- Fin de Seccion de Contactenos -->






      <!-- Seccion de Contactenos -->
      <section id="ubicacion" class="section">
         <div class="container">
            <div class="section-header">
               <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Ubicación</h2>
               <hr class="lines wow zoomIn" data-wow-delay="0.3s">
               <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">
                <strong> Av. Francisco de Miranda esquina con Av. Diego Cisneros, Edif Centro Empresarial Miranda, piso 1 Ofic. D
                  Los Ruíces, Caracas. </strong> 
               </p>
            </div>
            <section class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d125539.70418857712!2d-66.89954866626132!3d10.491540235005452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d10.491145999999999!2d-66.829323!5e0!3m2!1sen!2sve!4v1519795372218" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
               </iframe>
            </section>
         </div>
      </section>

@endsection