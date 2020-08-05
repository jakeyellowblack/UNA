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
					<h1 class="h2 mb-2">Presupuesto</h1>



					<!-- Card -->
	        <div class="card mb-5">
		        <!-- Card Header -->
		        <header class="card-header">
			        <h2 class="h4 card-header-title">Tabla de Presupuestos</h2>
                    
                    
                  <form action="{{ route('presupuesto.presupuesto') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="file">

            <button class='btn btn-primary float-right'>Importar Presupuesto</button>
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
					          <th>Concepto</th>
					          <th>Nombre</th>
					          <th>Fecha</th>
					          <th>Monto Total</th>
<!--					          <th class="text-center">Actions</th>
-->				          </tr>
				          </thead>



@foreach($presupuesto as $pre)

			            <tbody>
				          <tr>
					          <td class="font-weight-semi-bold">{{ $pre->id }}</td>
					          <td class="font-weight-semi-bold">{{ $pre->concepto }}</td>
					          <td class="font-weight-semi-bold">{{ $pre->nombre }}</td>
					          <td class="font-weight-semi-bold">{{ $pre->fecha }}</td>
					          <td class="font-weight-semi-bold">{{ $pre->montoT }}</td>
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