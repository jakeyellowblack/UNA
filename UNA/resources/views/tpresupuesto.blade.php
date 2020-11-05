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

							
 								<div class="card-body pt-0">
									<label for="file">Cargar desde archivo</label> <a href="#aboutModal" data-tooltip="•Opcional
     •Tipo de archivo permitido: .xlsx" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-danger"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>                               
                            
                           <form action="{{ route('presupuesto.import') }}" method="post" enctype="multipart/form-data">
            			@csrf
            
		               <div class="input-group">
		               
		        			<label class="input-group-btn">
								<span class="btn btn-primary btn-file">
		                Seleccione un archivo... <input type="file" id="banner" name="banner" style="visibility: hidden; position: absolute;" class="hidden">
		            			</span>
		        			</label>
		        
		        			<input class="form-control" id="banner_captura" readonly name="banner_captura" type="text" value="">

		           			<button class='btn btn-primary float-right'>Importar Presupuesto</button>
		                </div>
        			</form> 
                   								</div>                             
                            
	         		<hr class="my-4">
                     
                     
                     
 <div class="card-body pt-0">
									<label for="formu">Crear desde formulario</label>  </div>                

                            
	     			<form class="h-100" action="{{ route('tpresupuesto.store') }}" method="post">
	     				@csrf
							<div class="card-body pt-0">
                            
                            
								<div class="form-group">
									<label for="tipo">Tipo</label><a href="#aboutModal" data-tooltip="•Campo obligatorio" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>   
                                    
                                    
                                                                         
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
									<label for="concepto">Concepto</label><a href="#aboutModal" data-tooltip="•Campo obligatorio
        •Max: 20 caracteres" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
                                    
									<input required id="concepto" name="concepto" maxlength="50" class="form-control form-pill" type="text" placeholder="Motivo del movimiento">
								</div>
		                            
								<div class="form-group">
									<label for="montoT">Monto</label><a href="#aboutModal" data-tooltip="•Campo obligatorio
        •Solo números
        •Puede incluir decimales" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
                                    
									<input id="montoT" name="montoT" maxlength="200" class="form-control form-pill" type="number" step="any" placeholder="Monto">
								</div>   


		                            
		                            
								<div class="form-group">
									<label for="numero">Cuentas</label><a href="#aboutModal" data-tooltip="•Campo obligatorio" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
		                            <select name="cuenta_id" class="form-control form-pill">
		                              <option disabled selected>Seleccione...</option>

		                              	@foreach ($cuenta as $cu)		
		                                	<option value="{{ $cu->id }}">
		                            			{{ $cu->id }}-
		                                        {{ $cu->nombre }}
		                              
		                                    </option>
		                                @endforeach

		                            </select>
								</div>  
		                            
								<div class="form-group">
									<label for="created_at">Fecha</label><a href="#aboutModal" data-tooltip="•Campo obligatorio" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a>
                                    
                                    
                                    
									<input id="created_at" name="created_at" maxlength="200" class="form-control datetimepicker form-pill" type="date" placeholder="Fecha"> 
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

		var file = document.getElementById("banner");

		$(document).on('change','.btn-file :file',function(){
		  var input = $(this);
		  var numFiles = input.get(0).files ? input.get(0).files.length : 1;
		  var label = input.val().replace(/\\/g,'/').replace(/.*\//,'');
		  input.trigger('fileselect',[numFiles,label]);
		});
		$(document).ready(function(){
		  $('.btn-file :file').on('fileselect',function(event,numFiles,label){
		    var input = $(this).parents('.input-group').find(':text');
		    var log = numFiles > 1 ? numFiles + ' files selected' : label;
		    if(input.length){ input.val(log); }else{ if (log) alert(log); }
		  });
		});



 $(function () {
    $('.datetimepicker').datetimepicker();
});


// Tooltips
$('.tip').each(function () {
	$(this).tooltip(
	{
		html: true,
		title: $('#' + $(this).data('tip')).html()
	});
});
</script> 

</body>
	<!-- End Body -->
</html>



@endsection


