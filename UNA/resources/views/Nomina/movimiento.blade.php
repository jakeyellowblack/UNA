@extends('layouts.other')
  
@section('content')

<!DOCTYPE html>
	<!-- Head -->
<head>

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
        </style>
</head>
	<!-- End Head -->

	<!-- Body -->
<body>
	<!-- Content -->
	<div class="u-content">
		<!-- Content Body -->
		<div class="u-body">
			<h1 class="h2 mb-2">Movimientos de Nómina</h1>

			<!-- Card -->
	        <div class="card mb-5">
		        
		        <!-- Card Header -->

		        <header class="card-header">
			        <h2 class="h4 card-header-title">Tabla de Movimientos de Nómina</h2>
                    
                    
		        </header>
		        <!-- End Card Header -->
		        @foreach($nomina as $no)
		        <!-- Crad Body -->
	            <div class="card-body pt-0">
		          <!-- Table -->
		          <div class="table-responsive">
			          <table class="table table-hover mb-0">
				          <thead>
				          <tr>

					          <th>Titulo</th>
					          <th>Fecha</th>
			          	  </tr>
				          </thead>

			            <tbody>
				            <tr>

					          <td class="font-weight-semi-bold">{{ $no->title }}</td>
				              <td class="font-weight-semi-bold">{{ $no->date }}</td>
					          <td class="text-center"> </td>
				            </tr>
				        </tbody>
				         
						
				        <!-- Crad Body -->
			            <div class="card-body pt-0">
				          <!-- Table -->
				          <div class="table-responsive">
					          <table class="table table-hover mb-0">
						          <thead>
						          <tr>
							          <th>Codigo</th>
							          <th>Fecha</th>
					          	  </tr>
						          </thead>
						        @foreach($movnomina as $mov)
						        	@if($mov->nomina_id==$no->id)
						            <tbody>
							            <tr>
								          <td class="font-weight-semi-bold">{{ $mov->code }}</td>
							              <td class="font-weight-semi-bold">{{ $mov->amount }}</td>
								          <td class="text-center"> </td>
							            </tr>
							        </tbody>
							        @endif
						        @endforeach 
								

					          </table>

				          </div>
				          <!-- End Table -->
			          	</div>
			          	

			          </table>

		          </div>
		          <!-- End Table -->
	          	</div>
	          	@endforeach
		        <!-- Crad Body -->
	        </div>
					<!-- End Card -->

					
						<!-- Crad Body -->
			  </div>
					<!-- End Card -->
</div>

@include('layouts.footer')

@include('scripts')

</body>
	<!-- End Body -->
</html>



@endsection