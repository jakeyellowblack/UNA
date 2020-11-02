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
        
        
    <script src="{{ asset('js/jquerydata.js.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>

  
  
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
						<h2 class="h4 card-header-title">Nuevo Movimiento</h2>
					</header>
	                        
	         		<hr class="my-4">

							
	     			<form class="h-100" action="{{ route('tpresupuesto.store') }}" method="post">
	     				@csrf
							<div class="card-body pt-0">
	                        
								<div class="form-group">
									<label for="tipo">Tipo</label>                                        
		                            <select name="tipo" class="form-control form-pill">
		                              	<option disabled selected>Seleccione...</option>

	                                	<option  value="ingreso" >
	                                  	Ingreso
	                                	</option>

	                                	<option  value="egreso" >
	                                  	Egreso
	                                	</option>

		                            </select>                                       
								</div>  
		                            

								<div class="form-group">
									<label for="concepto">Concepto</label>
									<input required id="concepto" name="concepto" maxlength="200" class="form-control form-pill" type="text" placeholder="Motivo del movimiento">
								</div>
		                            
								<div class="form-group">
									<label for="montoT">Monto</label>
									<input id="montoT" name="montoT" maxlength="200" class="form-control form-pill" type="number" placeholder="Monto">
								</div>   


		                            
		                            
								<div class="form-group">
									<label for="numero">Cuentas</label>                                        
		                            <select name="cuenta_id" class="form-control form-pill">
		                              <option disabled selected>Seleccione...</option>

		                              	@foreach ($presupuesto as $pre)		
		                                	<option value="{{ $pre->idcuenta }}">
		                            
		                                        {{ $pre->nombre }}
		                              
		                                    </option>
		                                @endforeach

		                            </select>
								</div>  
		                            
								<div class="form-group">
									<label for="created_at">Fecha</label>
									<input id="created_at" name="created_at" maxlength="7" class="form-control datetimepicker form-pill" type="date" placeholder="Fecha"> 
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

<script type="text/javascript">
 $(function () {
    $('.datetimepicker').datetimepicker();
});
</script> 

</body>
	<!-- End Body -->
</html>



@endsection


