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
												        <a class="d-block link-dark" href="#editModal" 
                                                        data-myname="{{$no->namefile}}" 
                                                        data-mytitle="{{$no->title}}"
                                                        data-mydate="{{$no->date}}"
                                                        data-noid="{{$no->id}}" 
                                                        data-toggle="modal">Editar</a>
											        </li>

		                
											        <li class="mb-3">
												        <a class="d-block link-dark" 
                                                        href="#deleteModal" 
                                                        data-noid="{{$no->id}}" data-toggle="modal">Eliminar</a>
											        </li>
                                                    
											        <li class="mb-3" >
												        <a class="d-block link-dark" 
                                                        href="#">Movimiento</a>
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


  		<!-- EDIT Modals -->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
            
				<div class="modal-content">
                
					<div class="modal-header">
						<h5 class="modal-title" id="editModal">Editar contenido de nómina</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                   
                   
                      <form action="{{route('nomina.update', 'test')}}" method="post">
                      		@method('PUT')
      						@csrf
					<div class="modal-body">

                    	      		<input type="hidden" name="noid" id="noid" value="">


										<div class="form-group">
											<label for="namefile">Nombre</label>
											<textarea id="namefile" name="namefile" class="form-control form-pill" type="text" placeholder="Placeholder"></textarea>
										</div>
                                        
										<div class="form-group">
											<label for="title">Título</label>
											<textarea id="title" name="title" class="form-control form-pill" type="text" placeholder="Placeholder"></textarea>
										</div>
                                        
										<div class="form-group">
											<label for="date">Fecha</label>
											<textarea id="date" name="date" class="form-control form-pill" type="text" placeholder="Placeholder"></textarea>
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
						<h5 class="modal-title" id="deleteModal">Eliminar contenido de nómina</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                   
                   
                      <form action="{{route('nomina.destroy', 'test')}}" method="post">
                      		@method('DELETE')
      						@csrf
					<div class="modal-body">
                    
                    				<p class="text-center">
					¿Estás segur@ de que quieres eliminar este campo?
				</p>

                    	      		<input type="hidden" name="noid" id="noid" value="">

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
		    var id = button.data('noid') 
			var namefile = button.data('myname') 
		    var title = button.data('mytitle') 
		    var date = button.data('mydate') 

			  
		    var modal = $(this)
			  
		    modal.find('.modal-body #noid').val(id);
		    modal.find('.modal-body #namefile').val(namefile);
		    modal.find('.modal-body #title').val(title);
		    modal.find('.modal-body #date').val(date);


		})


		$('#deleteModal').on('show.bs.modal', function (event) {
		    var button = $(event.relatedTarget)
		    var id = button.data('noid') 
		    var modal = $(this)
		    modal.find('.modal-body #noid').val(id);
		})


	</script>

</body>
	<!-- End Body -->
</html>



@endsection