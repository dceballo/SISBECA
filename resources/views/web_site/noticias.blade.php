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

            <div class="row contentNoticia">

                  <div class=" side-center col-lg-12 ">
                     <table class="getNoticia table-hover datatable" id="dt_noticia">
                        <thead class="col-lg-12 col-xs-6 col-sm-6">
                        <th  class="th-titulo"></th>
                        <th class="th-accion"></th>
                        </thead>


                     </table>


                  </div>
            </div>
         </div>
      </section>


   @endsection
@section('personaljs')
   <script type="text/javascript">
       $(document).ready(function() {
           var table= $('.datatable').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{route('datatable/getNoticia')}}',
               columns: [
                   {data: 'titulo', name: 'titulo'},
                   {
                       data:null,
                       searchable:false,
                       defaultContent: "<button type='button' id='btn-noticia' class='edit btn btn-primary'><i class='fa fa-eye'></i> Ver Noticia</button> ",
                       orderable: false
                   },



               ]
           });


           Mostrar('#dt_noticia tbody',table);


       });

       var Mostrar= function (tbody,table) {
           $(tbody).on('click','button.edit',function () {
               var data= table.row($(this).parents('tr')).data();
               //console.log(data.id);
               var route= "{{asset('noticias')}}/"+data.id+'/show';


               location.assign(route);
           });

       }


   </script>

@endsection