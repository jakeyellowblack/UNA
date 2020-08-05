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
@include('layouts.footer')


			</div>
			<!-- End Content -->
		</main>
		<!-- End Main -->

@include('scripts')
</body>
	<!-- End Body -->
</html>



@endsection