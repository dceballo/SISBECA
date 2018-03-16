<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
            <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <span class="navbar-brand"><img class="img-fulid" src="{{asset('info_sitio/img/logo2.png')}}" alt=""></span>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="lnr lnr-menu"></i>
                  </button>
               </div>
               <div class="menu collapse navbar-collapse" id="main-navbar">
                  <ul class="navbar-nav mr-auto w-100 justify-content-end" >
                     <li class="nav-item nivel1">
                     @if($route=='home')
                        <a class="nav-link page-scroll active" href="#hero-area">Home</a>
                     @else
                      <a class="nav-link" href="{{asset('/')}}">Home</a>
                     @endif

                     </li>
                     <li class="nav-item dropdown nivel1">
                     @if($route=="nosotros")
                        <a class="nav-link dropdown-toggle nivel1 page-scroll active " target="_self" href="#hero-area" aria-haspopup="true" aria-expanded="false">
                        Nosotros
                        </a>
                        <ul class="dropdown-menu nivel2">
                           <li class="nav-item">
                              <a class="dropdown-item page-scroll" href="#objetivos">Misión, Visión y Valores</a>
                           </li>
                           <li class="nav-item">
                              <a class="dropdown-item page-scroll" href="#EstructuraOrganizativa">Estructura Organizativa</a>
                           </li>
                        </ul>
                     @else
                         <a class="nav-link dropdown-toggle nivel1 " target="_self" href="{{asset('nosotros')}}" aria-haspopup="true" aria-expanded="false">
                        Nosotros
                        </a>
                        <ul class="dropdown-menu nivel2">
                           <li class="nav-item">
                              <a class="dropdown-item " href="{{asset('nosotros')}}#objetivos">Misión, Visión y Valores</a>
                           </li>
                           <li class="nav-item">
                              <a class="dropdown-item " href="{{asset('nosotros')}}#EstructuraOrganizativa">Estructura Organizativa</a>
                           </li>
                        </ul>

                        @endif


                     </li>
                     <li class="nav-item dropdown nivel1">

                     @if($route=="programas")
                        <a class="nav-link dropdown-toggle nivel1 page-scroll active" target="_self" href="#hero-area" aria-haspopup="true" aria-expanded="false">
                        Programas
                        </a>
                        <ul class="dropdown-menu nivel2">
                           <li class="nav-item">
                              <a class="dropdown-item page-scroll" href="#asesoriaEducativa">Asesorías Educativas</a>
                           </li>
                           <li class="nav-item">
                              <a class="dropdown-item page-scroll" href="#ProExcelencia">ProExelencia AVAA</a>
                           </li>
                        </ul>

                     @else

                     <a class="nav-link dropdown-toggle nivel1" target="_self" href="{{asset('programas')}}" aria-haspopup="true" aria-expanded="false">
                        Programas
                        </a>
                        <ul class="dropdown-menu nivel2">
                           <li class="nav-item">
                              <a class="dropdown-item" href="{{asset('programas')}}#asesoriaEducativa">Asesorías Educativas</a>
                           </li>
                           <li class="nav-item">
                              <a class="dropdown-item" href="{{asset('programas')}}#ProExcelencia">ProExelencia AVAA</a>
                           </li>
                        </ul>

                        @endif



                     </li>
                     <li class="nav-item dropdown nivel1">

                     @if($route=="membresias")
                        <a class="nav-link dropdown-toggle nivel1 page-scroll active" target="_self" href="#hero-area" aria-haspopup="true" aria-expanded="false">
                        Membresías
                        </a>
                        <ul class="dropdown-menu nivel2">
                           <li class="nav-item">
                              <a class="dropdown-item page-scroll" href="#membresiasCorporativas">Membresía Corporativa</a>
                           </li>
                           <li class="nav-item">
                              <a class="dropdown-item page-scroll" href="#membresiaInstitucional">Membresía Institucional</a>
                           </li>
                        </ul>

                        @else

                        <a class="nav-link dropdown-toggle nivel1 " target="_self" href="{{asset('membresias')}}" aria-haspopup="true" aria-expanded="false">
                        Membresías
                        </a>
                        <ul class="dropdown-menu nivel2">
                           <li class="nav-item">
                              <a class="dropdown-item " href="{{asset('membresias')}}#membresiasCorporativas">Membresía Corporativa</a>
                           </li>
                           <li class="nav-item">
                              <a class="dropdown-item " href="{{asset('membresias')}}#membresiaInstitucional">Membresía Institucional</a>
                           </li>
                        </ul>

                        @endif
                     </li>
                     <li class="nivel1 nav-item">
                     @if($route=="noticias")
                        <a class="nav-link page-scroll active" target="_self" href="#hero-area">Noticias</a>
                        @else
                        <a class="nav-link" target="_self" href="{{asset('noticias')}}">Noticias</a>
                        @endif
                     </li>
                     <li class="nivel1 nav-item">
                     @if($route=="contactenos")
                        <a class="nav-link page-scroll active" target="_self" href="#hero-area">Contáctenos</a>
                        @else
                        <a class="nav-link " target="_self" href="{{asset('contactenos')}}">Contáctenos</a>
                        @endif
                     </li>
                     <li class="nivel1 nav-item">
                     
                       <a class="nav-link" target="_blank" href="{{asset(route('sisbeca'))}}">SISBECA</a>
                        
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="mobile-menu">
               <li>
                 @if($route=="home")
                  <a class="page-scroll active" href="#hero-area">Home</a>
                  @else
                  <a href="{{asset('/')}}">Home</a>
                  @endif
               </li>
               <li class="dropdown">
               @if($route=="nosotros")
                  <a class="nav-link dropdown-toggle page-scroll active" href="#hero-area" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Nosotros
                  </a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-item">
                        <a class="page-scroll" href="#objetivos">Misión, Visión y Valores</a>
                     </li>
                     <li class="dropdown-item">
                        <a class="page-scroll" href="#EstructuraOrganizativa">Estructura Organizativa</a>
                     </li>
                  </ul>
                  @else
                  <a class="nav-link dropdown-toggle" target="_self" href="{{asset('nosotros')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Nosotros
                  </a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-item">
                        <a  href="{{asset('nosotros')}}#objetivos">Misión, Visión y Valores</a>
                     </li>
                     <li class="dropdown-item">
                        <a  href="{{asset('nosotros')}}#EstructuraOrganizativa">Estructura Organizativa</a>
                     </li>
                  </ul>
                  @endif

               </li>
               <li class="dropdown">
               @if($route=="programas")
                  <a class="nav-link dropdown-toggle page-scroll active" href="#hero-area" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Programas
                  </a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-item">
                        <a class="page-scroll" href="#asesoriaEducativa">Asesorías Educativas</a>
                     </li>
                     <li class="dropdown-item">
                        <a class="page-scroll" href="#ProExcelencia">ProExcelencia AVAA</a>
                     </li>
                  </ul>
                  @else
                  <a class="nav-link dropdown-toggle" target="_self" href="{{asset('programas')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Programas
                  </a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-item">
                        <a  href="{{asset('programas')}}#asesoriaEducativa">Asesorías Educativas</a>
                     </li>
                     <li class="dropdown-item">
                        <a href="{{asset('programas')}}#ProExcelencia">ProExcelencia AVAA</a>
                     </li>
                  </ul>

                  @endif


               </li>
               <li class="dropdown">

                  @if($route=="membresia")
                  <a class="nav-link dropdown-toggle page-scroll active" target="_self" href="#hero-area" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Membresías
                  </a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-item">
                        <a class="page-scroll" href="#membresiasCorporativas">Membresía Corporativa</a>
                     </li>
                     <li class="dropdown-item">
                        <a class="page-scroll" href="#membresiaInstitucional">Membresía Institucional</a>
                     </li>
                  </ul>
                  @else

                  <a class="nav-link dropdown-toggle" target="_self" href="{{asset('membresias')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Membresías
                  </a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-item">
                        <a href="{{asset('membresias')}}#membresiasCorporativas">Membresía Corporativa</a>
                     </li>
                     <li class="dropdown-item">
                        <a  href="{{asset('membresias')}}#membresiaInstitucional">Membresía Institucional</a>
                     </li>
                  </ul>

                  @endif
               </li>
               <li>
               @if($route=="noticias")
                  <a class="page-scroll active" target="_self" href="#hero-area">Noticias</a>
                  @else
                     <a  target="_self" href="{{asset('noticias')}}">Noticias</a>
                  @endif
               </li>
               <li>
               @if($route=="contactenos")
                  <a class="page-scroll active" target="_self" href="#hero-area">Contáctenos</a>
                  @else
                  <a  target="_self" href="{{asset('contactenos')}}">Contáctenos</a>
                  @endif
               </li>
               <li>
               
                  <a target="_blank" href="{{asset(route('sisbeca'))}}">SISBECA</a>
                  
               </li>

            </ul>
            <!-- Mobile Menu End -->
         </nav>
         <!-- Navbar End -->   