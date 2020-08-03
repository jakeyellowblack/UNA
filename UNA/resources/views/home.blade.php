@extends('layouts.other')
  
@section('content')

<!DOCTYPE html>
<html lang="en" class="no-js">
	<!-- Head -->
<head>
    <title>Sistema UNA</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<!-- Favicon -->
		<link rel="shortcut icon" href="logouna.png" type="image/x-icon">

		<!-- Web Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

		<!-- Components Vendor Styles -->
		<link rel="stylesheet" href="assets/vendor/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

		<!-- Theme Styles -->
		<link rel="stylesheet" href="assets/css/theme.css">
		<style type="text/css">
		.no-js body .u-header .u-header-left .u-header-logo {
	font-size: 25px;
}


h6 {
	font-weight: bold;
}
h6 {
	font-size: 70px;
}
h6 {
	text-align: center;
}
        </style>
</head>
	<!-- End Head -->





	<!-- Body -->
<body>
		<!-- Header (Topbar) -->
		<header class="u-header">
			<!-- Header Left Section -->
			<div class="u-header-left">
				<!-- Header Logo -->
				<a class="u-header-logo" href="home">
					<img class="u-header-logo__icon" src="logomini.png" alt="Awesome Icon">
        			Sistema UNA
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
<!--						<div id="headerSearch" class="u-header-search-form">
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
							<span class="text-dark d-none d-md-inline-flex align-items-center">
                            {{ Auth::user()->name }}
								<span class="ti-angle-down text-muted ml-4"></span>
							</span>
						</a>


						<div class="u-header-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="userProfileInvoker" style="width: 260px;">
							<div class="card p-3">


								<div class="card-body p-0">

										<li>
		                          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                          </a>
                                
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
						<a class="u-sidebar-logo" href="index.html">
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
                            


							<!-- Forms -->
							<li class="u-sidebar-nav-menu__item">
								<a class="u-sidebar-nav-menu__link" href="/user/create">
									<span class="ti-pencil-alt u-sidebar-nav-menu__item-icon"></span>
									<span class="u-sidebar-nav-menu__item-title">Añadir usuario</span>
								</a>
							</li>
							<!-- End Forms -->

							<!-- Tables -->
							<li class="u-sidebar-nav-menu__item">
								<a class="u-sidebar-nav-menu__link" href="tpresupuesto">
									<span class="ti-layout u-sidebar-nav-menu__item-icon"></span>
									<span class="u-sidebar-nav-menu__item-title">Subir presupuesto</span>
								</a>
							</li>
							<!-- End Tables -->
					</nav>
					<!-- End Sidebar Nav -->
				</div>
			</aside>
			<!-- End Sidebar -->




						<!-- Content -->
			<div class="u-content">
				<!-- Content Body -->
				<div class="u-body">
                					<h1 class="h2 mb-2">Inicio</h1>

					<!-- Doughnut Chart -->
					<div class="row">

							<!-- Performance Chart -->
							<div class="card h-100">
								<!-- Card Header -->
							


									<ul class="list-inline mb-0">
										<div class="container-fluid">



<h6>¡Bienvenid@ al Sistema de gestión financiero para el Departamento de Control Presupuestario de la Universidad Nacional Abierta (UNA)!</h6>

					</ul>
					<!-- End Footer Menu -->

					<!-- Copyright -->
					<!-- End Copyright -->
				</footer>
				<!-- End Footer -->
			</div>
			<!-- End Content -->
		</main>
		<!-- End Main -->

		<!-- Global Vendor -->
		<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
		<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
		<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

		<!-- Plugins -->
		<script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
		<script src="assets/vendor/chartjs-plugin-style/dist/chartjs-plugin-style.min.js"></script>

		<!-- Initialization  -->
		<script src="assets/js/sidebar-nav.js"></script>
		<script src="assets/js/main.js"></script>

		<script src="assets/js/charts/area-chart.js"></script>
		<script src="assets/js/charts/area-chart-small.js"></script>
		<script src="assets/js/charts/doughnut-chart.js"></script>
</body>
	<!-- End Body -->
</html>



@endsection