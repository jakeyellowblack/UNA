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
    
	<h1 class="h2 mb-2">Lista de Movimientos de Nómina</h1>
    
    


					<!-- Card -->
	        <div class="card mb-5">
            
		        <!-- Card Header -->
		        <header class="card-header">
			        <h2 class="h4 card-header-title">Movimientos de Nómina</h2>  
	        	</header>
                
		        <!-- Crad Body -->
	          <div class="card-body pt-0">
              
                              <div align="right">
                <a href="{{ route('nomina.nomina') }}" class="btn btn-primary my-20 my-sm-0" role="button">Generar reporte</a>
                          </div>
              
		          <!-- Table -->
		          <div class="table-responsive">
			          <table class="table table-hover mb-0">
				          <thead>
				          <tr>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Monto</th>
                            <th>Archivo asociado</th>
                            <th>Acciones</th>
				          </tr>
				          </thead>



				 @foreach($movnomina as $mov)

			            <tbody>
				          <tr>
								          <td class="font-weight-semi-bold">{{ $mov->id }}</td>
							              <td class="font-weight-semi-bold">{{ $mov->code }}</td>
								          <td class="font-weight-semi-bold">{{ $mov->amount }}</td>
                                          <td class="font-weight-semi-bold">{{ $mov->nomina->title }}</td>

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
                                                        data-mycode="{{$mov->code}}" 
                                                        data-myamount="{{$mov->amount}}"
                                                        data-movid="{{$mov->id}}" 
                                                        data-toggle="modal">Editar</a>
											        </li>

		                
											        <li class="mb-3">
												        <a class="d-block link-dark" 
                                                        href="#deleteModal" 
                                                        data-movid="{{$mov->id}}" data-toggle="modal">Eliminar</a>
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
                                            {{ $movnomina->render() }}

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
						<h5 class="modal-title" id="editModal">Editar contenido de movimiento</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                   
                   
                      <form action="{{route('nomovimiento.update', 'test')}}" method="post">
                      		@method('PUT')
      						@csrf
					<div class="modal-body">

                    	      		<input type="hidden" name="movid" id="movid" value="">


                                        
                                        <div class="form-group">
											<label for="code">Código</label>
											<input id="code" name="code" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
                                        
										<div class="form-group">
											<label for="amount">Monto</label>
											<input id="amount" name="amount" class="form-control form-pill" type="number" placeholder="Placeholder">
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
						<h5 class="modal-title" id="editModal">Eliminar contenido de movimiento</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                   
                   
                      <form action="{{route('nomovimiento.destroy', 'test')}}" method="post">
                      		@method('DELETE')
      						@csrf
					<div class="modal-body">
                    
                    				<p class="text-center">
					¿Estás segur@ de que quieres eliminar este campo?
				</p>

                    	      		<input type="hidden" name="movid" id="movid" value="">

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

  
  $('#editModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
	  
	  var id = button.data('movid') 
      var code = button.data('mycode') 
      var amount = button.data('myamount') 

	  
      var modal = $(this)
	  
      modal.find('.modal-body #movid').val(id);
      modal.find('.modal-body #code').val(code);
	  modal.find('.modal-body #amount').val(amount);
})


  $('#deleteModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
	  
	  var id = button.data('movid') 
     
	  
      var modal = $(this)
	  
      modal.find('.modal-body #movid').val(id);
 
})

</script>
</body>
	<!-- End Body -->
</html>



@endsection