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

@if (session('errors') )
 <div class="alert alert-danger">
{{ session('errors') }}
</div>
@endif

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
                <nav class="navbar navbar-light bg-light">
                
  					<form action="{{ route('listpresupuesto') }}" class="form-inline" method="get" role="search">
  
					    <select name="tip" class="form-control mr-sm-2">
						    <option disabled selected>Buscar por...</option>
						    <option value="tipo">Tipo</option>
						    <option value="concepto">Concepto</option>
						    <option value="created_at">Fecha</option>
						    <option value="montoT">Monto</option>
						    <option value="nombre">Cuenta</option>
					    </select>
					  
					    <input name="busqueda" class="form-control mr-sm-2" size="85"  maxlength="30" type="text" placeholder="Escribe tu búsqueda aquí...">
					    <button class="btn btn-outline-success my-20 my-sm-0" type="submit">Buscar.</button>
    
  					</form>
  
				</nav>
		        
		        <header class="card-header">
			    
			    	<h2 class="h4 card-header-title">Tabla de Presupuestos</h2>
                    
                    
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
						          	<th>Tipo</th>
						          	<th>Concepto</th>
						          	<th>Fecha</th>
						          	<th>Monto</th>
                                    <th>Cuenta</th>

						          	<th class="text-center">Acciones</th> 
				         		</tr>
				          	</thead>



							@foreach($presupuesto as $pre)

				            <tbody>
					            <tr>
						            <td class="font-weight-semi-bold">{{ $pre->id }}</td>
	                                <td class="font-weight-semi-bold">
										@if($pre->tipo=="ingreso")
											Ingreso  
										@else
											Egreso
										@endif
								    </td>
	                                    

						            <td class="font-weight-semi-bold">{{ $pre->concepto }}</td>
						            <td class="font-weight-semi-bold">{{ $pre->created_at }}</td>
						            <td class="font-weight-semi-bold">{{ $pre->montoT }}</td>
                                    <td class="font-weight-semi-bold">{{ $pre->cuenta->nombre  }}</td>


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
												        <a class="d-block link-dark" href="#editModal" data-myconcepto="{{$pre->concepto}}" data-mynombre="{{$pre->nombre}}" data-myfecha="{{$pre->created_at}}" data-mymontot="{{$pre->montoT}}" data-preid="{{$pre->id}}" data-toggle="modal">Editar</a>
											        </li>

											        <li>
												        <a class="d-block link-dark" href="#deleteModal" data-preid="{{$pre->id}}" data-toggle="modal">Eliminar</a>
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

                      {{ $presupuesto->render() }}

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


                         
  		<!-- EDIT Modals -->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
            
				<div class="modal-content">
                
					<div class="modal-header">
						<h5 class="modal-title" id="editModal">Editar contenido de presupuesto</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                   
                   
                      <form action="{{route('presupuesto.update', 'test')}}" method="post">
                      		@method('PUT')
      						@csrf
					<div class="modal-body">

                    	      		<input type="hidden" name="preid" id="preid" value="">

										<div class="form-group">
											<label for="concepto">Concepto</label>
											<textarea id="concepto" name="concepto" class="form-control form-pill" type="text" placeholder="Placeholder"></textarea>
										</div>
                                        
                                        <div class="form-group">
											<label for="nombre">Nombre</label>
											<input id="nombre" name="nombre" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
                                        
                                        <div class="form-group">
											<label for="fecha">Fecha</label>
											<input id="fecha" name="fecha" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
                                        
                                        <div class="form-group">
											<label for="montoT">Monto total</label>
											<input id="montoT" name="montoT" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
           					</div>
                    
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary">Guardar cambios</button>
					</div>
                </form>
				</div>
			</div>
		</div>
		<!-- End EDIT Modals -->    
        
        
		<!-- DELETE Modals -->
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
            
				<div class="modal-content">
                
					<div class="modal-header">
						<h5 class="modal-title" id="editModal">Eliminar contenido de presupuesto</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                   
                   
                      <form action="{{route('presupuesto.destroy', 'test')}}" method="post">
                      		@method('DELETE')
      						@csrf
					<div class="modal-body">
                    
                    				<p class="text-center">
					¿Estás segur@ de que quieres eliminar este campo?
				</p>

                    	      		<input type="hidden" name="preid" id="preid" value="">

           					</div>
                    
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">No, cancelar</button>
						<button type="submit" class="btn btn-danger">Sí, eliminar</button>
					</div>
                </form>
				</div>
			</div>
		</div>
		<!-- End DELETE Modals -->        
                                  
                                
                                
                          
                                


@include('layouts.footer')


			</div>
			<!-- End Content -->
		</main>
		<!-- End Main -->


@include('scripts')


	<script>

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



		  
		$('#editModal').on('show.bs.modal', function (event) {
		    var button = $(event.relatedTarget)
		    var id = button.data('preid') 
		    var concepto = button.data('myconcepto') 
		    var nombre = button.data('mynombre') 
			var fecha = button.data('myfecha') 
		    var montoT = button.data('mymontot') 
			  
		    var modal = $(this)
			  
		    modal.find('.modal-body #preid').val(id);
		    modal.find('.modal-body #concepto').val(concepto);
		    modal.find('.modal-body #nombre').val(nombre);
			modal.find('.modal-body #fecha').val(fecha);
		    modal.find('.modal-body #montoT').val(montoT);
		})


		$('#deleteModal').on('show.bs.modal', function (event) {
		    var button = $(event.relatedTarget)
		    var id = button.data('preid') 
		    var modal = $(this)
		    modal.find('.modal-body #preid').val(id);
		})




	</script>

</body>
	<!-- End Body -->
</html>



@endsection