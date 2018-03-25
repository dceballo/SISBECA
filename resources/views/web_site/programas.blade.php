@extends('web_site.layouts.main')

@section('title', "Programas")
@section('content')
      <!-- Inicio de Seccion Principal -->
      <section id="seccionPrincipal" class="section" data-stellar-background-ratio="0.2">
         <br/><br/><br/>
         <div class="container">
            <div class="section-header">
               <h2 class="section-title">Programas</h2>
               <hr class="lines">
               <p class="section-subtitle">La Asociación Venezolano Americana de Amistad desarrolla tres programas sociales en el área educativa. Nuestro principal esfuerzo está dirigido al Programa Excelencia AVAA (ProExcelencia), propuesta que ha beneficiado a centenares de jóvenes de escasos recursos económicos durante sus cinco años de estudios universitarios en Venezuela.</p>
               <p class="section-subtitle" >
                  Adicionalmente, AVAA está respaldado por las embajadas de Estados Unidos y Canadá como el Centro de Asesorías Educativas para opciones de estudio en estos países.
               </p>
            </div>
            <div class="row">
                              <div class="col-lg-2 col-md-3 col-xs-4"></div>
               <div class="col-lg-8 col-md-6 col-xs-4">
                  <div class="container">
                     <div class="row" id="contentPrincipal">
                         <div class="col-lg-6 col-sm-6 col-xs-6 box-item">
                           <a class="page-scroll" href="#asesoriaEducativa">
                           <span class="icon">
                           <i class="lnr lnr-smile"></i>
                           </span>
                           </a>
                           <div class="text">
                              <h4>Asesorías Educativas</h4>
                           </div>
                        </div>
                         <div class="col-lg-6 col-sm-6 col-xs-6 box-item">
                           <a class="page-scroll" href="#ProExcelencia">
                           <span class="icon">
                           <i class="lnr lnr-laptop-phone"></i>
                           </span>
                           </a>
                           <div class="text">
                              <h4>ProExcelencia AVAA</h4>
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
      <!--Inicio Asesorias Educativas -->
      <section id="asesoriaEducativa" class="section">
         <div class="container">
            <div class="section-header">
               <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Asesorías Educativas</h2>
               <hr class="lines wow zoomIn" data-wow-delay="0.3s">
               <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">En esta seccion se describe las Asesorías Educativas AVAA</p>
            </div>
            <section class="Material-accordion-section section-padding">
               <div class="container">
                  <div class="row letrasResponsive">
                     <div class="col-md-12 wow animated fadeInUp animated" align="justify" data-wow-delay=".2s" style="visibility: visible;-webkit-animation-delay: .2s; -moz-animation-delay: .2s; animation-delay: .2s;">
                        <ul class="list-group">
                           <li class="list-group-item">
                              <p>
                                 AVAA lleva adelante los <strong>Centros de Asesorías Educativas oficiales de las Embajadas de Estados Unidos y Canadá en Venezuela.</strong> Nuestros asesores son entrenados para aconsejar de manera objetiva y veraz, a los estudiantes o profesionales venezolanos sobre todas las propuestas educativas que ofrecen ambos países.
                              </p>

                              <p><strong>*Todos los montos incluyen IVA y deben ser cancelados a través de transferencia o depósito bancario 48 horas hábiles antes de concertar la cita. Una vez efectuado por favor notificar.</strong></p>
                              <p>Los <strong>montos* de inversión por asesoría, válidos a partir del 18 de ENERO de 2018,</strong> son los siguientes:</p>
                           </li>
                        </ul>
                        <div class="panel-group Material-default-accordion" id="Material-accordion" role="tablist" aria-multiselectable="true">
                           <div class="panel panel-default mb-3">
                              <div class="panel-heading" role="tab" id="headingOne">
                                 <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#Material-accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                    1. Informativa o Básica: Bs. 200.000.
                                    </a>
                                 </h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                 <div class="panel-body">
                                    <p>Esta asesoría ofrece información completa para la aplicación de estudiantes en el extranjero: información general del país, instituciones que ofrecen el programa solicitado, duración aproximada del proceso, requisitos para obtener visa estudiantil y otros documentos necesarios.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="panel panel-default mb-3">
                              <div class="panel-heading" role="tab" id="headingTwo">
                                 <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Curso de Idioma o Intermedia: Bs. 300.000.
                                    </a>
                                 </h4>
                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="">
                                 <div class="contenidoDeList panel-body" align="justify">
                                    <ul>
                                       <p><strong>Consiste en:</strong></p>
                                       <li >
                                          <p >Selección de institución y aplicación al curso.</p>
                                       </li>
                                       <li  >
                                          <p>Guía al postulante en la solicitud de visado estudiantil. </p>
                                       </li>
                                       <li >
                                          <p>Orientación para seleccionar el sistema de residencia y requisitos para trámites de Seguro Estudiantil.</p>
                                       </li>
                                    </ul>
                                    <p>La <strong>asesoría para cursos de idiomas</strong> requiere mayor seguimiento y contacto con el estudiante y la institución.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="panel panel-default mb-3">
                              <div class="panel-heading" role="tab" id="headingThree">
                                 <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Estudios Universitarios o Completa: Bs. 550.000.
                                    </a>
                                 </h4>
                              </div>
                              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="">
                                 <div class="contenidoDeList panel-body" align="justify">
                                    <p>Ofrece al estudiante orientación e información necesaria para aplicar a instituciones de educación superior: pregrados, postgrados, diplomados, maestrías, y doctorados.</p>
                                    <ul>
                                       <p >
                                          <strong>   La asesoría para estudios universitarios incluye:</strong>
                                       </p>
                                       <li >
                                          <p > Sesión de Coaching con el estudiante para determinar área de interés.</p>
                                       </li>
                                       <li >
                                          <p > Orientación en la preselección y selección del programa e institución (acreditadas en Estados Unidos y Canadá)</p>
                                       </li>
                                       <li >
                                          <p > Información sobre posibilidades de ayuda financiera y recursos online para consultas e investigación. </p>
                                       </li>
                                       <li >
                                          <p > Guía en procesos de legalización, apostillamiento, traducción de notas, títulos académicos y en la elaboración de cartas de recomendación para la institución seleccionada. </p>
                                       </li>
                                       <li >
                                          <p >  Revisión de ensayo.</p>
                                       </li>
                                       <li >
                                          <p >   Orientación de los exámenes de suficiencia requeridos (TOEFL, IELTS, SAT, GRE, GMAT).</p>
                                       </li>
                                       <li >
                                          <p >Firma y sello de documentos académicos (envío de un juego sellado incluido).</p>
                                       </li>
                                       <li >
                                          <p > <strong> Procesos de aplicación para visa de estudiante:</strong></p>
                                          <ul>
                                             <li>
                                                <p >  Revisión de documentos.</p>
                                             </li>
                                             <li>
                                                <p >  Preparación para la entrevista.</p>
                                             </li>
                                          </ul>
                                       </li>

                                       <li >
                                          <p>  Acompañamiento pre-partida.</p>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-5"></div>
               </div>
            </section>
            <section class="Material-accordion-section section-padding">
               <div class="container">
                  <div class="row letrasResponsive">
                     <div class="col-md-12 wow animated fadeInUp animated" data-wow-delay=".2s" style="visibility: visible;-webkit-animation-delay: .2s; -moz-animation-delay: .2s; animation-delay: .2s;">
                        <ul class="list-group">
                           <li class="list-group-item">
                              <p>
                                 Durante el <strong>2018</strong> se realizarán mensualmente <strong>charlas de orientación</strong> sobre oportunidades de estudio en ambos países de forma totalmente gratuita. 
                              </p>
                           </li>
                        </ul>
                        <div class="panel-group Material-default-accordion" id="Material-accordion2" role="tablist" aria-multiselectable="true">
                           <div class="panel panel-default mb-3">
                              <div class="panel-heading" role="tab" id="heading1">
                                 <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#Material-accordion2" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                                    Calendario de charlas
                                    </a>
                                 </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="heading1">
                                 <div class="panel-body table-responsive">
                                    <table class="table table-hover">
                                       <thead class="thead-inverse">
                                          <tr>
                                             <th>Canada</th>
                                             <th>Estados Unidos</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Enero</td>
                                             <td>ENERO | JUEVES 25 | 3:00PM</td>
                                          </tr>
                                          <tr>
                                             <td>FEBRERO  | JUEVES 1 | 3:00PM</td>
                                             <td>FEBRERO | JUEVES 22 | 3:00PM</td>
                                          </tr>
                                          <tr>
                                             <td>MARZO | JUEVES 1 | 3:00PM</td>
                                             <td>MARZO | JUEVES 22 | 3:00PM</td>
                                          </tr>
                                          <tr>
                                             <td>ABRIL  | JUEVES 05 | 3:00PM</td>
                                             <td>ABRIL | JUEVES 26 | 3:00PM </td>
                                          </tr>
                                          <tr>
                                             <td>MAYO | JUEVES 03 | 3:00PM</td>
                                             <td>MAYO | JUEVES 31 | 3:00PM </td>
                                          </tr>
                                          <tr>
                                             <td>JUNIO | JUEVES 07 | 3:00PM</td>
                                             <td>JUNIO | JUEVES 28 | 3:00PM</td>
                                          </tr>
                                          <tr>
                                             <td>JULIO | JUEVES 12 | 3:00PM</td>
                                             <td>JULIO | JUEVES 26 | 3:00AM </td>
                                          </tr>
                                          <tr>
                                             <td>AGOSTO | JUEVES 02 | 3:00PM</td>
                                             <td>AGOSTO | JUEVES 30 | 3:00PM</td>
                                          </tr>
                                          <tr>
                                             <td>SEPTIEMBRE | JUEVES 06 | 3:00PM</td>
                                             <td>SEPTIEMBRE | JUEVES 27 | 3:00PM</td>
                                          </tr>
                                          <tr>
                                             <td>OCTUBRE | JUEVES 04 | 3:00PM</td>
                                             <td>OCTUBRE | JUEVES 25 | 3:00PM</td>
                                          </tr>
                                          <tr>
                                             <td>NOVIEMBRE | JUEVES 01 | 3:00PM</td>
                                             <td>NOVIEMBRE | JUEVES 29 | 3:00PM</td>
                                          </tr>
                                          <tr>
                                             <td>DICIEMBRE | JUEVES 06| 3:00PM</td>
                                             <td>DICIEMBRE</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <p>
                                       <strong>*Para participar de estas charlas, por favor, confirmar asistencia al teléfono (0212) 235.8877.</strong>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>


                     <div class="panel-group Material-default-accordion" id="Material-accordion3" role="tablist" aria-multiselectable="true">

                                                   <div class="panel panel-default mb-3">
                              <div class="panel-heading" role="tab" id="heading2">
                                 <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#Material-accordion3" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Ferias Educativas Expo-Estudiante
                                    </a>
                                 </h4>
                              </div>
                              <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                 <div align="justify" class="panel-body">
                                    <p> Como parte de las actividades que se llevan a cabo desde el Centro de Asesorías Educativas, AVAA organiza la Feria Expo-Estudiante de la mano con <a  target="_blank" href="http://www.bmimedia.net/new/default.php">Business Marketing International (BMI)</a>. En esta feria participan diversas universidades e instituciones de todo el mundo que, de manera directa, ofrecen a los asistentes sus propuestas educativas.</p>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </section>
      <!--Fin de Asesorias Educativas -->
      <!--Inicio de ProExelencia AVAA -->
      <section id="ProExcelencia" class="section">
         <div class="container">
            <div class="section-header">
               <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">ProExcelencia AVAA</h2>
               <hr class="lines wow zoomIn" data-wow-delay="0.3s">
               <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">En esta seccion se describe el programa Exelencia AVAA</p>
            </div>
            <section class="welcome-section section-padding section-dark">
               <div class="container">
                  <div class="row letrasResponsive">
                     <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="Material-tab">
                           <!-- Nav tabs -->
                           <ul class="nav nav-tabs justify-content-left" id="myTab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#business" role="tab"><i class="lnr lnr-laptop-phone"></i><br/>Programa Exelencia AVAA</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#startup" role="tab"><i class="lnr lnr-pushpin"></i><br/>Componentes del Programa</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#agency" role="tab"><i class="mdi mdi-all-inclusive"></i><br/>Requisitos para Postularse</a>
                              </li>
                           </ul>
                           <!-- Tab panes -->
                           <div class="tab-content">
                              <div  align="justify" class="tab-pane fade show active" id="business" role="tabpanel">
                                 <ul class="list-group">
                                    <li class="list-group-item">
                                       <br/>
                                       <p> El Programa Excelencia AVAA promueve la educación y formación integral de jóvenes venezolanos de medianos o bajos recursos económicos durante los cinco años de carrera universitaria.</p>
                                       <p>Además de apoyar a los estudiantes beneficiarios a completar su carrera con los más altos índices académicos, ProExcelencia AVAA desarrolla una serie de componentes que permiten formarlos con valores asociados al progreso, con capacidades profesionales y personales.</p>
                                       <p>Actualmente, el programa tiene a 250 beneficiarios de alto índice académico, vocación social y potencial de liderazgo; todos cursantes de carreras de 5 años en universidades públicas o privadas en la Gran Caracas.</p>
                                    </li>
                                 </ul>
                              </div>
                              <div class="contenidoDeList tab-pane fade" id="startup" role="tabpanel" >
                                 <li class="list-group-item">
                                    <br/>
                                 <ul>
                                       <li><p >Aporte económico mensual.</p></li>
                                    <li>  <p><strong>Formación en inglés: </strong></p>
                                       <ul>
                                           <li>      <p >Apoyo de un mentor, con mínimo 10 años de experiencia profesional, como modelo de vida y guía profesional.</p></li>

                                           <li>     <p >Curso completo de inglés en el Centro Venezolano Americano.</p></li>

                                          <li>      <p >Participación en el programa Práctica de Conversación en Inglés. </p></li>

                                           <li>       <p >Oportunidad de ganar una beca de inglés en USA o Canadá para los becarios con el rendimiento más destacado.</p></li>
                                       </ul>
                                    </li>


                                    <li>  <p>Formación en áreas extracurriculares y competencias organizacionales.</p></li>
                                    <li>  <p>Refuerzo de consciencia social y ciudadana con la participación en actividades de voluntariado. </p></li>
                                 </ul>
                                 </li>

                              </div>
                              <div  class="contenidoDeList tab-pane fade" id="agency" role="tabpanel">
                                 <li class="list-group-item">
                                    <br/>
                                 <ul class="list-group">
                                    <li> <p>Ser Venezolano.</p></li>
                                    <li><p >Ser estudiante universitario y estar máximo iniciando segundo año de estudio, quienes cursen carreras de 5 años.</p></li>
                                    <li> <p >Haber culminado al menos el primer periodo académico universitario y consignar la constancia de notas del mismo.</p></li>
                                    <li> <p >Poseer promedio de calificaciones igual o superior a 16 puntos en la escala de 20.</p></li>
                                    <li> <p >Comprometerse a estudiar el idioma inglés en el Centro Venezolano Americano o en otra institución de idiomas que determine la Asociación.</p></li>
                                    <li> <p>Tener una conducta intachable.</p></li>
                                    <li>  <p>Mostrar dotes de liderazgo y espíritu comunitario.</p></li>
                                    <li> <p>Estar dispuesto a participar en las actividades educativas, culturales y deportivas de AVAA. </p></li>
                                    <li>  <p>Demostrar necesidad de ayuda económica. </p></li>

                                 </ul>
                                 </li>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section id="planillas" class="col-md-12 col-lg-12 col-xs-12" >
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-6 col-sm-12 col-xs-12 box-item">
                                 <span class="icon">
                                 <i class="lnr lnr-layers"></i>
                                 </span>
                                 <div class="text">
                                    <p>Descargar Planilla 1</p>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-12 col-xs-12 box-item">
                                 <span class="icon">
                                 <i class="lnr lnr-layers"></i>
                                 </span>
                                 <div class="text">
                                    <p>Descargar Planilla 2</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </section>
      <!--fin de seccion ProExelencia AVAA -->

   @endsection