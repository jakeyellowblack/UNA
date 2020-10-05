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
	<h1 class="h2 mb-2">Usuarios</h1>
	<a class="btn btn-primary" href="{{ route('user.create') }}" role="button">Crear Usuario</a>


					<!-- Card -->
	        <div class="card mb-5">
		        <!-- Card Header -->
		        <header class="card-header">
			        <h2 class="h4 card-header-title">Lista de Usuarios</h2>  
	        	</header>

		        <!-- Crad Body -->
	          <div class="card-body pt-0">
		          <!-- Table -->
		          <div class="table-responsive">
			          <table class="table table-hover mb-0">
				          <thead>
				          <tr>
                            <th>Nombre</th>
                            <th>Codigo</th>
                            <th>Estado</th>
                            <th>Cargo</th>
                            <th>Acciones</th>
				          </tr>
				          </thead>



				@foreach($user as $us)

			            <tbody>
				          <tr>
					          <td class="font-weight-semi-bold">{{ $us->name }}</td>
					          <td class="font-weight-semi-bold">{{ $us->code }}</td>
					          <td class="font-weight-semi-bold">{{ $us->status }}</td>
					          <td class="font-weight-semi-bold">{{ $us->jobtitle }}</td>

					          <td class="text-center">

					          <a href="{{ route('user.edit', [$us->id]) }}" type="button" class="btn btn-primary">Editar</a>

					          <form method="DELETE" action="{{ route('user.destroy', [$us->id]) }}">
		                                    		@csrf
					  								<button type="submit" class="btn btn-danger" >Delete</button>
		                      </form>

					         	
					          

					          </td>
				          </tr>
				          </tbody>
				          
				@endforeach
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