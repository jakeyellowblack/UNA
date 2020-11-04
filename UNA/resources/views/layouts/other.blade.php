<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="logouna.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title class="stroke">Sistema UNA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    <script src="{{ asset('js/fontawesomeicons.js') }}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito"  type="text/css">
    <link rel="stylesheet" href="assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

<!-- Header (Topbar) -->
    <header class="u-header">
        <!-- Header Left Section -->
        <div class="u-header-left">
            <!-- Header Logo -->
            <a class="u-header-logo" href="home">
                <img class="u-header-logo__icon" src="logomini.png" alt="Awesome Icon">
                <img class="u-header-logo__text" src="logo-light-text.png" alt="Awesome">
            </a>
            <!-- End Header Logo -->
        </div>
        
        
        
        <!-- End Header Left Section -->

        <!-- Header Middle Section -->
        <div class="u-header-middle">
            <!-- Sidebar Invoker -->
            <div class="u-header-section">
                <a class="js-sidebar-invoker u-header-invoker u-sidebar-invoker" href="#"
                   data-is-close-all-except-this="true"
                   data-target="#sidebar">
                    <span class="ti-align-left u-header-invoker__icon u-sidebar-invoker__icon--open"></span>
                    <span class="ti-align-justify u-header-invoker__icon u-sidebar-invoker__icon--close"></span>
                </a>
            </div>
            <!-- End Sidebar Invoker -->

            <!-- Header Search -->
            <div class="u-header-section justify-content-sm-start flex-grow-1 py-0">
                <div class="u-header-search"
                     data-search-mobile-invoker="#headerSearchMobileInvoker"
                     data-search-target="#headerSearch">
                    <!-- Header Search Invoker (Mobile Mode) -->
                    <a id="headerSearchMobileInvoker" class="u-header-search__mobile-invoker align-items-center" href="#">
                        <span class="ti-search"></span>
                    </a>
                    
                    
                    <!-- End Header Search Invoker (Mobile Mode) -->
                    <!-- Header Search Form -->
                    <!--<div id="headerSearch" class="u-header-search-form">
                        <form action="/" class="w-100">
                            <div class="input-group h-100">
                                <button class="btn-link input-group-prepend u-header-search__btn" type="submit">
                                    <span class="ti-search"></span>
                                </button>
                                <input class="form-control u-header-search__field" type="search" placeholder="Type to search…">
                            </div>
                        </form>
                    </div>-->
                    <!-- End Header Search Form -->
                    
                    
                </div>
            </div>
            <!-- End Header Search -->

            <!-- User Profile -->
            <div class="u-header-section u-header-section--profile">
                <div class="u-header-dropdown dropdown">
                    <a class="link-muted d-flex align-items-center" href="#" role="button" id="userProfileInvoker" aria-haspopup="true" aria-expanded="false"
                       data-toggle="dropdown"
                       data-offset="0">
                        <span class="text-light d-none d-md-inline-flex align-items-center">
                        {{ Auth::user()->name }}
                        <span class="fas fa-sign-out-alt text-muted ml-4 fa-2x"></span>
                        </span>
                    </a>

                    <div class="u-header-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="userProfileInvoker" style="width: 260px;">
                        <div class="card p-3">
                            <div class="card-body p-0">

                                    <li>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}<a>
                        
                                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                  </form>
                            
                                  
                            </div>
                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- End User Profile -->
            
      
            
      
        </div>
        <!-- End Header Middle Section -->
    </header>
<!-- End Header (Topbar) -->



<!-- Main -->
    <main class="u-main">
        <!-- Sidebar -->
        <aside id="sidebar" class="u-sidebar">
            <div class="u-sidebar-inner">
                <!-- Sidebar Header -->
                <header class="u-sidebar-header">
                    <!-- Sidebar Logo -->
                    <a class="u-sidebar-logo" href="home">
                        <img class="u-sidebar-logo__icon" src="assets/svg/logo-mini.svg" alt="Awesome Icon">
                        <img class="u-sidebar-logo__text" src="assets/svg/logo-text-light.svg" alt="Awesome">
                    </a>
                    <!-- End Sidebar Logo -->
                </header>
                <!-- End Sidebar Header -->

                <!-- Sidebar Nav -->
                <nav class="u-sidebar-nav">
                    <!-- Sidebar Nav Menu -->
                    <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                        <!-- Dashboard -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link active" href="home">
                                <span class="ti-dashboard u-sidebar-nav-menu__item-icon"></span>
                                <span class="u-sidebar-nav-menu__item-title">Inicio</span>
                            </a>
                        </li>
                        <!-- End Dashboard -->
                        
                                    
<!--                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="">
                            <span class="ti-money u-sidebar-nav-menu__item-icon"></span>
                            <span class="u-sidebar-nav-menu__item-title">Saldo</span>
                        </a>
                    </li>                       
                        -->
              

                    <!-- Forms -->
<!--        			<li class="u-sidebar-nav-menu__item">
        							<a class="u-sidebar-nav-menu__link" href="#"
        							   data-target="#menuItemGestiones">
        								<span class="ti-bar-chart u-sidebar-nav-menu__item-icon"></span>
        								<span class="u-sidebar-nav-menu__item-title">Balance</span>
        								<span class="ti-angle-down u-sidebar-nav-menu__item-arrow"></span>
        							</a>
                                    
                        <ul id="menuItemGestiones" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                   
                            
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('ingreso.index') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Ingresos</span>
                                </a>
                            </li>
                            
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('egreso.index') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Egresos</span>
                                </a>
                            </li>
                                
                        </ul>
                    </li>-->
                    <!-- End Forms -->



                    <!-- Tables -->
                    <li class="u-sidebar-nav-menu__item">
        				<a class="u-sidebar-nav-menu__link" href="#"
        				   data-target="#menuItemMovimientos">
        					<span class="ti-layout-media-right u-sidebar-nav-menu__item-icon"></span>
        					<span class="u-sidebar-nav-menu__item-title">Presupuesto</span>
        					<span class="ti-angle-down u-sidebar-nav-menu__item-arrow"></span>
        				</a>
                                
                        <ul id="menuItemMovimientos" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="tpresupuesto">
                                    <span class="u-sidebar-nav-menu__item-title">Nuevo movimiento</span>
                                </a>
                            </li>
                            
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="listpresupuesto">
                                    <span class="u-sidebar-nav-menu__item-title">Lista de movimientos</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Tables -->    
                    
                    
                    <!-- Tables -->
                    <li class="u-sidebar-nav-menu__item">
        				<a class="u-sidebar-nav-menu__link" href="#"
        				   data-target="#menuItemReformulacion">
        					<span class="ti-layers-alt u-sidebar-nav-menu__item-icon"></span>
        					<span class="u-sidebar-nav-menu__item-title">Reformulaciones</span>
        					<span class="ti-angle-down u-sidebar-nav-menu__item-arrow"></span>
        				</a>
                                
                        <ul id="menuItemReformulacion" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('reformulacion.create') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Nueva reformulación</span>
                                </a>
                            </li>
                            
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('reformulacion.index') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Lista de reformulaciones</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Tables -->                        
                    
                    <!-- Tables -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#"
                           data-target="#menuItemCuenta">
                            <span class="fas fa-university u-sidebar-nav-menu__item-icon"></span>
                            <span class="u-sidebar-nav-menu__item-title">Cuentas</span>
                            <span class="ti-angle-down u-sidebar-nav-menu__item-arrow"></span>
                        </a>
                                
                        <ul id="menuItemCuenta" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('cuenta.create') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Nueva cuenta</span>
                                </a>
                            </li>
                            
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('cuenta.index') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Lista de cuentas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Tables -->
                    
                    
                    
                    
                    <!-- Tables -->
                    <li class="u-sidebar-nav-menu__item">
        				<a class="u-sidebar-nav-menu__link" href="#"
        				   data-target="#menuItemNomina">
                           <span class="ti-write u-sidebar-nav-menu__item-icon"></span>
        					<span class="u-sidebar-nav-menu__item-title">Nómina</span>
        					<span class="ti-angle-down u-sidebar-nav-menu__item-arrow"></span>
        				</a>
                                
                        <ul id="menuItemNomina" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="tnomina">
                                    <span class="u-sidebar-nav-menu__item-title">Crear nueva nómina</span>
                                </a>
                            </li>
                            
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="listnomina">
                                    <span class="u-sidebar-nav-menu__item-title">Lista de nómina</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Tables -->                     
                    
                    <!-- Forms -->
        			<li class="u-sidebar-nav-menu__item">
        							<a class="u-sidebar-nav-menu__link" href="#"
        							   data-target="#menuItemUsuarios">
                                    <span class="ti-user u-sidebar-nav-menu__item-icon"></span>
        								<span class="u-sidebar-nav-menu__item-title">Usuarios</span>
        								<span class="ti-angle-down u-sidebar-nav-menu__item-arrow"></span>
        							</a>
                                    
                        <ul id="menuItemUsuarios" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                    
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="/user_create">
                                    <span class="u-sidebar-nav-menu__item-title">Crear usuario</span>
                                </a>
                            </li>
                            
                             <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('user.index') }}">
                                    <span class="u-sidebar-nav-menu__item-title">Lista de usuarios</span>
                                </a>
                            </li>
                       
                                
                        </ul>
                    </li>
                    <!-- End Forms -->                    
                    
                    
                              
                                    
                    <!--<li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="{{ route('cierre.index') }}">
                            <span class="ti-lock u-sidebar-nav-menu__item-icon"></span>
                            <span class="u-sidebar-nav-menu__item-title">Cierres</span>
                        </a>
                    </li>  --> 

                </nav>
                <!-- End Sidebar Nav -->

            </div>
        </aside>
        <!-- End Sidebar -->
        
        <main class="container">
            @yield('content')
        </main>

    </div>
    

    
</body>
</html>