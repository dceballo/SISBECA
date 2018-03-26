<!-- Left Sidebar  -->
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>

                {{--Inicio de Vistas del Administrador--}}
                @if(Auth::user()->admin())
                <li class="nav-label">Inicio</li>
                <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Usuarios</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{asset(route('mantenimientoUser.index'))}}">Mantenimiento</a></li>
                        @if(\Request::route()->getName()==='mantenimientoUser.create')
                            <li class="opcion-menu-oculta"><a href="{{route('mantenimientoUser.create')}}"></a></li>
                        @endif
                        @if(\Request::route()->getName()==='mantenimientoUser.edit')
                            <li class="opcion-menu-oculta"><a href="{{route(\Request::route()->getName(),$user->id)}}"></a></li>
                        @endif
                    </ul>
                </li>
                @endif
                {{--Fin de Vistas del Administrador--}}

                {{--Inicio de Vistas del Postulante a Becario--}}
                @if(Auth::user()->rol==='postulante_becario')
                <li class="nav-label">Inicio</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Postulación<span class="label label-rouded label-primary pull-right">2</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Ver Postulación</a></li>
                        <li><a href="#">Ver Fecha Entrevista</a></li>
                    </ul>
                </li>
                @endif
                {{--Fin de Vistas del Postulante a Becario--}}


                {{--Inicio de Vistas del Postulante a Mentor--}}
                @if(Auth::user()->rol==='postulante_mentor')
                <li class="nav-label">Inicio</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Postulación</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Ver Postulación</a></li>
                    </ul>
                </li>
                @endif
                {{--Fin de Vistas del Postulante a Mentor--}}


                {{--Inicio de Vistas del  Mentor--}}
                @if(Auth::user()->rol==='mentor')
                <li class="nav-label">Inicio</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Opciones</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Ver Becarios asignados</a></li>
                    </ul>
                </li>
                @endif
                {{--Fin de Vistas del Mentor--}}

                {{--Inicio de Vistas del Coordinador Educativo es decir el Editor--}}
                @if(Auth::user()->rol==='editor')
                <li class="nav-label">Inicio</li>
                <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="hide-menu">Articulos</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('mantenimientoNoticia.index')}}">Mantenimiento</a></li>

                        @if(\Request::route()->getName()==='mantenimientoNoticia.create')
                            <li class="opcion-menu-oculta"><a href="{{route('mantenimientoNoticia.create')}}"></a></li>
                        @endif
                        @if(\Request::route()->getName()==='mantenimientoNoticia.edit')
                            <li class="opcion-menu-oculta"><a href="{{route(\Request::route()->getName(),$noticia->id)}}"></a></li>
                        @endif
                    </ul>
                </li>

                <li class="nav-label">Gestion de Cronogramas</li>
                <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Talleres y Voluntareados</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Talleres</a></li>
                        <li><a href="#">Voluntareados</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Cursos y ChatClubs</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">CVA</a></li>
                        <li><a href="#">ChatClubs</a></li>
                    </ul>
                </li>
                @endif
                {{--Fin de Vistas del Coordinador Educativo es decir el Editor--}}

                {{--Inicio de Vistas del Directivo Unicamente--}}
                @if(Auth::user()->rol==='directivo')
                <li class="nav-label">Inicio</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Postulación a Becarios</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Ver Postulantes</a></li>
                        <li><a href="#">Ver Entrevistas</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Nuevo Ingreso</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Carta CVA</a></li>
                        <li><a href="#">Carta Bancaria</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Mentorias</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Ver Postulantes</a></li>
                        <li><a href="#">Mentores Activos</a></li>
                        <li><a href="#">Cambio de Status</a></li>
                        <li><a href="#">Asignacion de Mentores</a></li>
                    </ul>
                </li>

                <li class="nav-label">Gestion de Nominas</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Nomina</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Generar Nomina</a></li>
                        <li><a href="#">Consultar Nomina</a></li>
                        <li><a href="#">Cambiar Status de Nomina</a></li>
                    </ul>
                </li>
                @endif
                {{--Fin de Vistas del Directivo unicamente--}}


                {{--Inicio de Vistas del Coordinador--}}
                @if(Auth::user()->rol==='coordinador')
                <li class="nav-label">Inicio</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Seguimientos</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">CVA</a></li>
                        <li><a href="#">Universidad</a></li>
                        <li><a href="#">Voluntareados</a></li>
                        <li><a href="#">Cursos y Talleres</a></li>
                        <li><a href="#">ChatClubs</a></li>

                    </ul>
                </li>
                <li class="nav-label">Gestion de Solicitudes </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Revisar Solicitudes</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Desincorporación</a></li>
                        <li><a href="#">Reincorporación</a></li>
                    </ul>
                </li>
                @endif
                {{--Fin de Vistas del Coordinador--}}

                {{--Inicio de Vista Compartida Coordinador/Directivo --}}
                @if((Auth::user()->rol==='coordinador') || (Auth::user()->rol==='directivo'))
                <li class="nav-label">Consultas y Reportes</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Becarios</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Listado</a></li>
                        <li><a href="#">Consultar Expendientes</a></li>
                        <li><a href="#">Reportes de Notas</a></li>
                        <li><a href="#">Consultar Mejor Promedio</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Mentores</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Listado</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Egresados</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Graduados</a></li>
                        <li><a href="#">Inactivos</a></li>
                    </ul>
                </li>
                @endif
                {{--Fin d Vista Compartida Coordinador/Directivo --}}



                {{--Inicio de Vista de Becarios Unicamente--}}
                @if(Auth::user()->rol==='becario')
                <li class="nav-label">Inicio</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Cuenta Bancaria</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Ver o Cargar</a></li>
                    </ul>
                </li>

                <li class="nav-label">Control de Estudios</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">CVA</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Cargar Registro</a></li>
                        <li><a href="#">Notas(Periodo Lectivo)</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Cursos, Talleres </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Cargar Cursos</a></li>
                        <li><a href="#">Cargar Talleres</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">ChatClubs</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Pre-Incripcion ChatClubs</a></li>
                        <li><a href="#">Cargar ChatClubs</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Voluntareados</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Pre-Incripcion Voluntareados</a></li>
                        <li><a href="#">Cargar Voluntareados</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Universidad</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Cargar Comprobante</a></li>
                        <li><a href="#">Notas(Periodo Lectivo)</a></li>
                    </ul>
                </li>

                <li class="nav-label">Opciones</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Consultas y Reportes</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Consultar Voluntariados</a></li>
                        <li><a href="#">Consultar Expendiente</a></li>
                        <li><a href="#">Reporte de Notas</a></li>
                        <li><a href="#">Ver Mentor Asignado</a></li>
                    </ul>
                </li>
                @endif
                {{--Fin de Vista de Becarios Unicamente--}}

                {{--Inicio de Vista Compartida Becarios/Mentores--}}
                @if((Auth::user()->rol==='mentor')|| (Auth::user()->rol==='becario'))
                <li class="nav-label">Solicitudes</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Solicitud</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Desincorporación</a></li>
                        <li><a href="#">Reincorporación</a></li>
                    </ul>
                </li>
                @endif
                {{-- Fin de Vista Compartida Becarios/Mentores--}}

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>