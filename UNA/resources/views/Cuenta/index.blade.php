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

@include('common.errors')

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
			<h1 class="h2 mb-2">Cuentas</h1>

			<!-- Card -->
	        <div class="card mb-5">
		        
                <nav class="navbar navbar-light bg-light">
                
  <form action="" class="form-inline" method="get" role="search">
  
   <select name="tip" class="form-control mr-sm-2">
      <option disabled selected>Buscar por...</option>
      <option value="nombre">Nombre</option>
      <option value="numero">Numero</option>
    </select>
  
    <input name="busqueda" class="form-control mr-sm-2" size="85" maxlength="30" type="text" placeholder="Escribe tu búsqueda aquí...">
    <button class="btn btn-outline-success my-20 my-sm-0" type="submit">Buscar.</button>
    
  </form>
  
</nav>
		        <header class="card-header">
			        <h2 class="h4 card-header-title">Tabla de Cuentas</h2>
                    
                    
		        </header>
		        <!-- End Card Header -->
                
              
		        <!-- Crad Body -->
	          <div class="card-body pt-0">
              
                <div align="right">
                <a href="{{ route('cuenta.cuenta') }}" class="btn btn-primary my-20 my-sm-0" role="button">Generar reporte</a>
                          </div>
		          <!-- Table -->
		          <div class="table-responsive">
			          <table class="table table-hover mb-0">
				          <thead>
				          <tr>
				          	  <th>Nombre</th>
					          <th>Número</th>
					          <th>Monto</th>

					          <th class="text-center">Acciones</th> 
			          </tr>
				          </thead>





			            @foreach($cuenta as $cu)

			            <tbody>
				            <tr>
					          <td class="font-weight-semi-bold">{{ $cu->nombre }}</td>
					          <td class="font-weight-semi-bold">{{ $cu->numero }}</td>
				              <td class="font-weight-semi-bold">{{ $cu->montoT }}</td>

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
												        <a class="d-block link-dark" href="#editModal" 
                                                        data-mynombre="{{$cu->nombre}}" 
                                                        data-mynumero="{{$cu->numero}}"
                                                        data-mymonto="{{$cu->montoT}}"
                                                        data-cuid="{{$cu->id}}" 
                                                        data-toggle="modal">Editar</a>
											        </li>

		                
											        <li class="mb-3">
												        <a class="d-block link-dark" 
                                                        href="#deleteModal" 
                                                        data-cuid="{{$cu->id}}" data-toggle="modal">Eliminar</a>
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
                      {{ $cuenta->render() }}

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
						<h5 class="modal-title" id="editModal">Editar contenido de cuenta</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                   
                   
                      <form action="{{route('cuenta.update', 'test')}}" method="post">
                      		@method('PUT')
      						@csrf
					<div class="modal-body">

                    	      		<input type="hidden" name="cuid" id="cuid" value="">


										<div class="form-group">
											<label for="nombre">Nombre</label>
											<textarea id="nombre" name="nombre" class="form-control form-pill" type="text" placeholder="Placeholder"></textarea>
										</div>
                                        
										<div class="form-group">
											<label for="numero">Número</label>
											<textarea id="numero" name="numero" class="form-control form-pill" type="number" placeholder="Placeholder"></textarea>
										</div>
                                        
										<div class="form-group">
											<label for="montoT">Monto</label>
											<textarea id="montoT" name="montoT" class="form-control form-pill" type="number" placeholder="Placeholder"></textarea>
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
						<h5 class="modal-title" id="deleteModal">Eliminar contenido de reformulación</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                   
                   
                      <form action="{{route('cuenta.destroy', 'test')}}" method="post">
                      		@method('DELETE')
      						@csrf
					<div class="modal-body">
                    
                    				<p class="text-center">
					¿Estás segur@ de que quieres eliminar este campo?
				</p>

                    	      		<input type="hidden" name="cuid" id="cuid" value="">

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
		    var id = button.data('cuid') 
			var nombre = button.data('mynombre') 
		    var numero = button.data('mynumero') 
		    var montoT = button.data('mymonto') 

			  
		    var modal = $(this)
			  
		    modal.find('.modal-body #cuid').val(id);
		    modal.find('.modal-body #nombre').val(nombre);
		    modal.find('.modal-body #numero').val(numero);
		    modal.find('.modal-body #montoT').val(montoT);


		})


		$('#deleteModal').on('show.bs.modal', function (event) {
		    var button = $(event.relatedTarget)
		    var id = button.data('cuid') 
		    var modal = $(this)
		    modal.find('.modal-body #cuid').val(id);
		})


	</script>

</body>
	<!-- End Body -->
</html>



@endsection