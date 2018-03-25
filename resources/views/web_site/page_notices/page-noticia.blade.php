@extends('web_site.layouts.main')

@section('title', "Noticias")
@section('content')
    <section class="section-princip-noticia" data-stellar-background-ratio="0.2">


    <!--Inicio de Sesion de Miembros institucionales -->
    <section id="Noticia" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-noticia wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$noticia->titulo}}</h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            </div>
            <div id="portfolio" class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">&nbsp;</div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
                    <div class="portfolio-item">
                        <div class="shot-item">
                            <img src="{{asset($noticia->url_imagen)}}" alt="Noticia" />
                            <a class="overlay lightbox" href="{{asset($noticia->url_imagen)}}">
                                <i class="lnr lnr-eye item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br/><br/>
            <hr class="lines">
            <section class="welcome-section section-padding section-dark">
                <div class="container">
                    <div class="row letrasNoticias">
                        @if(!is_null($noticia->url_articulo))
                            <div class="notice-header-footer side-left col-sm-6 col-md-6"><a href="{{asset($noticia->url_articulo)}}">{{$noticia->url_articulo}}</a></div>
                            @endif
                        <div class="contenidoDeList side-center col-sm-12 col-md-12">
                            {!! $noticia->contenido !!}
                        </div>

                            <div align="left" class="notice-header-footer col-sm-12 col-md-12">
                            @if($noticia->tipo=='articulo')
                            <p class=" footer-noticia  ">   <span id="siguenos" class="icon">
                             <i class="lnr lnr-thumbs-up"></i> Informacion Adicional:
                                </span><br/>
                                <span class="contact-articulo">{{$noticia->informacion_contacto}}</span>
                                @if(!is_null($noticia->email_contacto))
                                    <span class="icon contact-articulo">
                                    <a href="mailto:info@avaa.org"><i class="lnr lnr-envelope"></i></a>
                                    <a  style="color:#3d91d6;" href="mailto:info@avaa.org"><strong>info@avaa.org</strong></a></span>
                                @endif
                                @if(!is_null($noticia->telefono_contacto))
                                    <span class="icon contact-articulo">
                                    <i class="lnr lnr-phone"></i> 0212 235.7821
                                   </span>
                                @endif
                            </p>
                            @else
                                <span class="footer-noticia">{{$noticia->informacion_contacto}}</span>
                                @endif
                            </div>
                            <div align="right" class="notice-header-footer col-sm-12 col-md-12">Fecha Actualización: {{$noticia->updated_at}}</div>
                    </div>
                </div>
            </section>

        </div>
    </section>



    </section>


@endsection