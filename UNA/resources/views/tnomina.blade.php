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
        .btn.btn-primary {
	text-align: right;
}
        </style>
</head>
	<!-- End Head -->





	<!-- Body -->
<body>

			<!-- Content -->
			<div class="u-content">
				<!-- Content Body -->
				<div class="u-body">
					<h1 class="h2 mb-2">Nómina</h1>



					<!-- Card -->
	        <div class="card mb-5">
		        <!-- Card Header -->
		        <header class="card-header">
			        <h2 class="h4 card-header-title">Tabla de Nómina</h2>
                    
                    
                  <form action="{{ route('nomina.import') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="file">

            <button class='btn btn-primary float-right'>Importar Nómina</button>
        </form>
		        </header>
		        <!-- End Card Header -->

		        <!-- Crad Body -->
	          <div class="card-body pt-0">
		          <!-- Table -->
		          <div class="table-responsive">
			          <table class="table table-hover mb-0">
				          <thead>
				          <tr>
                            <th>ID</th>
                            <th>Salario Semanal</th>
                            <th>Salario Diario</th>
                            <th>Salario por Hora</th>
                            <th>Salario por Hora Extra Diuerna</th>
                            <th>Salario Integral</th>
                            <th>Feriado</th>
                            <th>Días Laborados</th>
                            <th>Utilidades</th>
                            <th>Monto Total</th>
<!--					          <th class="text-center">Actions</th>
-->				          </tr>
				          </thead>



@foreach($nomina as $no)

			            <tbody>
				          <tr>
					          <td class="font-weight-semi-bold">{{ $no->id }}</td>
					          <td class="font-weight-semi-bold">{{ $no->salarioSemanal }}</td>
					          <td class="font-weight-semi-bold">{{ $no->salarioDiario }}</td>
					          <td class="font-weight-semi-bold">{{ $no->salarioHora }}</td>
					          <td class="font-weight-semi-bold">{{ $no->salarioHoraExtraDiurno }}</td>
                              <td class="font-weight-semi-bold">{{ $no->salarioIntegral }}}</td>
					          <td class="font-weight-semi-bold">{{ $no->feriado }}</td>
					          <td class="font-weight-semi-bold">{{ $no->diasLaborados }}</td>
					          <td class="font-weight-semi-bold">{{ $no->utilidades }}</td>
                              <td class="font-weight-semi-bold">{{ $no->montoTotal }}</td>
					          <td class="text-center">
                              
						          <!-- Actions -->
<!--						          <div class="dropdown">
							          <a id="basicTable1MenuInvoker" class="u-icon-sm link-muted" href="#" role="button" aria-haspopup="true" aria-expanded="false"
							             data-toggle="dropdown"
							             data-offset="8">
								          <span class="ti-more"></span>
							          </a>-->
							          <!-- End Actions Invoker -->
                                      
                                      

							          <!-- Actions Menu -->
<!--							          <div class="dropdown-menu dropdown-menu-right" style="width: 150px;">
								          <div class="card border-0 p-3">
									          <ul class="list-unstyled mb-0">
										          <li class="mb-3">
											          <a class="d-block link-dark" href="#">Add</a>
										          </li>
										          <li>
											          <a class="d-block link-dark" href="#">Remove</a>
										          </li>
									          </ul>
								          </div>
							          </div>-->
							          <!-- End Actions Menu -->
                                      
                                      
<!--						          </div>
-->						          <!-- End Actions -->
					          </td>
				          </tr>
				         
					      										@endforeach

				          </tbody>
			          </table>
		          </div>
		          <!-- End Table -->
	          </div>
		        <!-- Crad Body -->
	        </div>
					<!-- End Card -->

					
						<!-- Crad Body -->
			  </div>
					<!-- End Card -->
</div>
				<!-- End Content Body -->

				<!-- Footer -->
				<footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted">
					<!-- Footer Menu -->
                    					<ul class="list-inline mb-3 mb-md-4">
						<li class="list-inline-item">

                    					<span class="text-muted ml-auto">&copy; 2020 <a class="text-muted"  target="_blank">Sistema UNA</a>.</span>
						</li>

						
						<li class="list-inline-item">
						  <a class="text-muted" target="_blank">------------------</a>
						</li>
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