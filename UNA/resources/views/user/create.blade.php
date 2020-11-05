@extends('layouts.other')
  
@section('content')

@if(session('status'))
 <div class="alert alert-success">
{{ session('status') }}
</div>
@endif

@if(session('message'))
 <div class="alert alert-danger">
{{ session('message') }}
</div>
@endif


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
						<h2 class="h4 card-header-title">Nuevo Usuario</h2>
					</header>
	                        
	         		<hr class="my-4">

							
	     			<form class="h-100" action="{{ route('user.store') }}" method="post">
	     				@csrf
                        
                        
							<div class="card-body pt-0">
	                        

		                            

								<div class="form-group">
									<label for="name">Nombre</label> <a href="#aboutModal" data-tooltip="•Campo obligatorio
        •Max: 50 caracteres" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
                                    
                                    
									<input required id="name" name="name" maxlength="50" class="form-control form-pill @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text" placeholder="Nombre del usuario">
                                    
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    @foreach($errors->get('name') as $error)
                                        <strong> <li>{{ $error }} </li></strong>
                                        @endforeach
                                    </span>
                                @enderror
                                                                    
								</div>
		                            
								<div class="form-group">
									<label for="status">Estado</label> <a href="#aboutModal" data-tooltip="•Campo obligatorio" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                                                           
                               <select required name="status" class="form-control form-pill @error('status') is-invalid @enderror" value="{{ old('status') }}">
                                  <option disabled selected>Seleccione...</option>
                                  <option value="1">Activo</option>
                                  <option value="0">Inactivo</option>
                                </select>       
                                                              
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                    @foreach($errors->get('status') as $error)
                                        <strong> <li>{{ $error }} </li></strong>
                                        @endforeach
                                    </span>
                                @enderror
                                                                    
								</div>                                   
                                    
                                    
                                    
								<div class="form-group">
									<label for="jobtitle">Cargo</label> <a href="#aboutModal" data-tooltip="•Campo obligatorio
        •Max: 100 caracteres" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
                                    
									<input required id="jobtitle" name="jobtitle" maxlength="100" class="form-control form-pill @error('jobtitle') is-invalid @enderror" value="{{ old('jobtitle') }}" type="text" placeholder="Cargo del usuario">
                                    
                                @error('jobtitle')
                                    <span class="invalid-feedback" role="alert">
                                    @foreach($errors->get('jobtitle') as $error)
                                        <strong> <li>{{ $error }} </li></strong>
                                        @endforeach
                                    </span>
                                @enderror
                                                                    
								</div> 

								<div class="form-group">
									<label for="code">Código UNA</label> <a href="#aboutModal" data-tooltip="•Campo obligatorio
        •Solo números
        •Obligatorio: 8 caracteres" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
									<input required id="code" name="code" maxlength="8" class="form-control form-pill @error('code') is-invalid @enderror" value="{{ old('code') }}" type="number" placeholder="Código UNA del usuario">
                                    
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                    @foreach($errors->get('code') as $error)
                                        <strong> <li>{{ $error }} </li></strong>
                                        @endforeach
                                    </span>
                                @enderror
                                                                    
								</div> 

		                            
								<div class="form-group">
									<label for="password">Contraseña</label> <a href="#aboutModal" data-tooltip="•Campo obligatorio
        •Max: 15 caracteres" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
									<input required id="password" name="password" maxlength="15" class="form-control form-pill @error('password') is-invalid @enderror" type="password" placeholder="Contraseña del usuario">
                                    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    @foreach($errors->get('password') as $error)
                                        <strong> <li>{{ $error }} </li></strong>
                                        @endforeach
                                    </span>
                                @enderror
                                                                    
								</div> 		                     
		                            
								<div class="form-group">
									<label for="password-confirm">Confirmar Contraseña</label> <a href="#aboutModal" data-tooltip="•Campo obligatorio
        •Max: 15 caracteres" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
									<input required id="password-confirm" name="password_confirmation" maxlength="15" class="form-control form-pill @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" type="password" placeholder="Confirmar contraseña" autocomplete="new-password">
                         
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                    @foreach($errors->get('password_confirmation') as $error)
                                        <strong> <li>{{ $error }} </li></strong>
                                        @endforeach
                                    </span>
                                @enderror
                                                                    
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