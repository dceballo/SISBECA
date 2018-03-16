<!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-primary pull-right">2</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{asset(route('sisbeca'))}}">Ecommerce </a></li>
                                <li><a href="{{asset(route('sisbeca.index1'))}}">Analytics </a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Apps</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Email</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{asset(route('sisbeca.emailCompose'))}}">Compose</a></li>
                                <li><a href="{{asset(route('sisbeca.emailRead'))}}">Read</a></li>
                                <li><a href="{{asset(route('sisbeca.emailInbox'))}}">Inbox</a></li>
                            </ul>
                        </li>

                        <li class="nav-label">Features</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Bootstrap UI <span class="label label-rouded label-warning pull-right">6</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{asset(route('sisbeca.uiAlert'))}}">Alert</a></li>
                                <li><a href="{{asset(route('sisbeca.uiButton'))}}">Button</a></li>
                                <li><a href="{{asset(route('sisbeca.uiDropdown'))}}">Dropdown</a></li>
                                <li><a href="{{asset(route('sisbeca.uiProgressbar'))}}">Progressbar</a></li>
                                <li><a href="{{asset(route('sisbeca.uiTab'))}}">Tab</a></li>
                                <li><a href="{{asset(route('sisbeca.uiTypography'))}}">Typography</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Components <span class="label label-rouded label-danger pull-right">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{asset(route('sisbeca.ucCalender'))}}">Calender</a></li>
                                <li><a href="{{asset(route('sisbeca.ucNestedable'))}}">Nestedable</a></li>
                                <li><a href="{{asset(route('sisbeca.ucSweetalert'))}}">Sweetalert</a></li>
                                <li><a href="{{asset(route('sisbeca.ucToastr'))}}">Toastr</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{asset(route('sisbeca.formBasic'))}}">Basic Forms</a></li>
                                <li><a href="{{asset(route('sisbeca.formLayout'))}}">Form Layout</a></li>
                                <li><a href="{{asset(route('sisbeca.formValidation'))}}">Form Validation</a></li>
                                <li><a href="{{asset(route('sisbeca.formEditor'))}}">Editor</a></li>
                                <li><a href="{{asset(route('sisbeca.formDropzone'))}}">Dropzone</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{asset(route('sisbeca.tableBasic'))}}">Basic Tables</a></li>
                                <li><a href="{{asset(route('sisbeca.datatable'))}}">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Layout</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{asset(route('sisbeca.layoutBlank'))}}">Blank</a></li>
                                <li><a href="{{asset(route('sisbeca.layoutBoxed'))}}">Boxed</a></li>
                                <li><a href="{{asset(route('sisbeca.layoutFixHeader'))}}">Fix Header</a></li>
                                <li><a href="{{asset(route('sisbeca.layoutFixSidebar'))}}">Fix Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">EXTRA</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Pages <span class="label label-rouded label-success pull-right">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success">3</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{asset(route('sisbeca.pageLogin'))}}">Login</a></li>
                                        <li><a href="{{asset(route('sisbeca.pageRegister'))}}">Register</a></li>
                                        <li><a href="{{asset(route('sisbeca.pageInvoice'))}}">Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{asset(route('sisbeca.pageError404'))}}">404</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-level-down"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>