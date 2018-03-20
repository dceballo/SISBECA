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
                <li class="nav-label">Inicio(Vta Administrador)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Usuarios</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{asset(route('mantenimientoUser.index'))}}">Mantenimiento</a></li>
                    </ul>
                </li>
                @endif
                {{--Fin de Vistas del Administrador--}}

                {{--Inicio de Vistas del Postulante--}}
                <li class="nav-label">Inicio(Vta Postulante)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Postulación<span class="label label-rouded label-primary pull-right">2</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Ver Postulación</a></li>
                        <li><a href="#">Ver Fecha Entrevista</a></li>
                    </ul>
                </li>
                {{--Fin de Vistas del Postulante--}}


                {{--Inicio de Vistas del Mentor--}}
                <li class="nav-label">Inicio(Vta Mentores)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Postulación</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Ver Postulación</a></li>
                        <li><a href="#">Ver Becarios asignados</a></li>
                    </ul>
                </li>
                {{--Fin de Vistas del Postulante--}}

                {{--Inicio de Vistas del Coordinador Educativo es decir el Editor--}}
                @if(Auth::user()->rol==='editor')
                <li class="nav-label">Inicio(Vta Editor)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="hide-menu">Noticias</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('mantenimientoNoticia.create')}}">Mantenimiento</a></li>
                    </ul>
                </li>

                <li class="nav-label">Gestion de Cronogramas(Vista Editor)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Talleres y Voluntareados</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Talleres</a></li>
                        <li><a href="#">Voluntareados</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Cursos y ChatClubs</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">CVA</a></li>
                        <li><a href="#">ChatClubs</a></li>
                    </ul>
                </li>
                @endif
                {{--Fin de Vistas del Coordinador Educativo es decir el Editor--}}

                {{--Inicio de Vistas del Directivo Unicamente--}}
                <li class="nav-label">Inicio(Vta. Direct.)</li>
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

                <li class="nav-label">Gestion de Nominas(Vista Dvo)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Nomina</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Generar Nomina</a></li>
                        <li><a href="#">Consultar Nomina</a></li>
                        <li><a href="#">Cambiar Status de Nomina</a></li>
                    </ul>
                </li>


                {{--Fin de Vistas del Directivo unicamente--}}


                {{--Inicio de Vistas del Coordinador--}}
                <li class="nav-label">Inicio (V. Coord)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Seguimientos</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">CVA</a></li>
                        <li><a href="#">Universidad</a></li>
                        <li><a href="#">Voluntareados</a></li>
                        <li><a href="#">Cursos y Talleres</a></li>
                        <li><a href="#">ChatClubs</a></li>

                    </ul>
                </li>
                <li class="nav-label">Gestion de Desincoporación (Vta Coord.)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Becarios ó Mentores</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Desincorporacion Temporal</a></li>
                        <li><a href="#">Desincorporacion Definitiva</a></li>
                    </ul>
                </li>
                <li class="nav-label">Gestión de Reincorporacion (Vta Coord.)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Becarios ó Mentores</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Reincorporacion Temporal</a></li>
                        <li><a href="#">Reincorporacion Definitiva</a></li>
                    </ul>
                </li>
                {{--Fin de Vistas del Coordinador--}}

                {{--Inicio de Vista Compartida Coordinador/Directivo --}}
                <li class="nav-label">Consultas y Reportes(V. Coord. y Direct.)</li>
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
                {{--Fin d Vista Compartida Coordinador/Directivo --}}



                {{--Inicio de Vista de Becarios Unicamente--}}
                <li class="nav-label">Inicio(Vista Becarios)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Cuenta Bancaria</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Ver o Cargar</a></li>
                    </ul>
                </li>

                <li class="nav-label">Control de Estudios(Vista Becarios)</li>
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

                <li class="nav-label">Opciones(Vista Becarios)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Consultas y Reportes</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Consultar Voluntariados</a></li>
                        <li><a href="#">Consultar Expendiente</a></li>
                        <li><a href="#">Reporte de Notas</a></li>
                        <li><a href="#">Ver Mentor Asignado</a></li>
                    </ul>
                </li>
                {{--Fin de Vista de Becarios Unicamente--}}

                {{--Inicio de Vista Compartida Becarios/Mentores--}}
                <li class="nav-label">Desincoporación o Reincorporación(Vista Becarios-Mentores)</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Desincoporación</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Solicitud Temporal</a></li>
                        <li><a href="#">Solicitud Definitiva</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Reincorporación</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#"> Solicitud </a></li>
                    </ul>
                </li>
                {{-- Fin de Vista Compartida Becarios/Mentores--}}

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>