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
									<label for="nombre">Nombre</label> <a href="#aboutModal" data-tooltip="•Campo obligatorio
        •Max: 50 caracteres" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
                                    
                                    
                                    
                                    
									<input required id="nombre" name="nombre" maxlength="50" class="form-control form-pill @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" type="text" placeholder="Nombre de la cuenta">
                                    
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                                    
								</div>		                                                                                       
								<div class="form-group">
									<label for="Numero">Código</label> <a href="#aboutModal" data-tooltip="•Campo obligatorio
        •Solo números
        •Max: 12 caracteres" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
                                    
									<input required id="numero" name="numero" maxlength="12" class="form-control form-pill @error('numero') is-invalid @enderror" value="{{ old('numero') }}" type="number" placeholder="Código de la cuenta">                             
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