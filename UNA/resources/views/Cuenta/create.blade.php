@extends('layouts.other')
  
@section('content')

<!DOCTYPE html>
<html lang="en" class="no-js">
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

	<div class="u-content">
		<div class="u-body">
			<div class="col-md-13 mb-12">  
				<div class="card h-100">
	                    
					<header class="card-header">
						<h2 class="h4 card-header-title">Nueva Cuenta</h2>
					</header>
	                        
	         		<hr class="my-4">

							
	     			<form class="h-100" action="{{ route('cuenta.store') }}" method="post">
	     				@csrf
                        
                        
							<div class="card-body pt-0">
	                        

		                            

								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input required id="nombre" name="nombre" maxlength="200" class="form-control form-pill @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" type="text" placeholder="Nombre del usuario">
                                    
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                                    
								</div>		                                                                                       
								<div class="form-group">
									<label for="Numero">Numero</label>
									<input required id="jobtitle" name="jobtitle" maxlength="200" class="form-control form-pill @error('jobtitle') is-invalid @enderror" value="{{ old('jobtitle') }}" type="text" placeholder="Cargo del usuario">                             
								</div> 

								                                   
								
								<button class="btn btn-primary my-20 my-sm-0" type="submit">Guardar</button>

							</div>
					</form>
	                    
	                    
					
				</div>
			</div>
		</div>
	</div>


@include('layouts.footer')

@include('scripts')

</body>
    <!-- End Body -->
</html>



@endsection