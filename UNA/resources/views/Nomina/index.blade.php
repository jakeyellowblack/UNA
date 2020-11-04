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
			<h1 class="h2 mb-2">Nómina</h1>

			<!-- Card -->
	        <div class="card mb-5">
		        
		        <!-- Card Header -->

		        <header class="card-header">
			        <h2 class="h4 card-header-title">Tabla de Nómina</h2>
                    
                    
		        </header>
		        <!-- End Card Header -->

		        <!-- Crad Body -->
	          <div class="card-body pt-0">
		          <!-- Table -->
		          <div class="table-responsive">
			          <table class="table table-hover mb-0">
				          <thead>
				          <tr>
				          	  <th>Nombre</th>
					          <th>Titulo</th>
					          <th>Fecha</th>

					          <th class="text-center">Acciones</th> 
			          </tr>
				          </thead>





			            @foreach($nomina as $no)

			            <tbody>
				            <tr>
					          <td class="font-weight-semi-bold">{{ $no->namefile }}</td>
					          <td class="font-weight-semi-bold">{{ $no->title }}</td>
				              <td class="font-weight-semi-bold">{{ $no->date }}</td>

					          <td class="text-center">

                               <!-- Actions --> 
						          
						          <div class="dropdown">
							          <a id="basicTable1MenuInvoker" class="u-icon-sm link-muted" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" data-offset="8">
								          <span class="ti-more"></span>
							          </a>
                                 
                                     
							          <!-- Actions Menu -->
						            <div class="dropdown-menu dropdown-menu-right" style="width: 150px;">
								        <div class="card border-0 p-3">
                                          
									          
                                              <ul class="list-unstyled mb-0">
                                            
										          <li class="mb-3">
											          <a class="d-block link-dark" href="#editModal" data-mynamefile="{{$ref->namefile}}" data-mytitle="{{$ref->title}}"  data-mydate="{{$ref->date}}" data-usid="{{$ref->id}}" data-toggle="modal">Editar</a>
										          </li>
                                                  
                                                  
										          <li>
											          <a class="d-block link-dark" href="#deleteModal" data-usid="{{$ref->id}}" data-toggle="modal">Eliminar</a>
										          </li>
									          </ul>
                                              
								        </div>
							        </div>
							          <!-- End Actions Menu -->
						          </div>
						          <!-- End Actions -->

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

@include('scripts')

</body>
	<!-- End Body -->
</html>



@endsection
