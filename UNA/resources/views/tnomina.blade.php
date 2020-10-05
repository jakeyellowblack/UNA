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
		<!-- Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
					<h1 class="h2 mb-2">Nómina</h1>



					<!-- Card -->
	        <div class="card mb-5">
		        <!-- Card Header -->
		        <header class="card-header">
			        <h2 class="h4 card-header-title">Tabla de Nómina</h2>
                    
                    
                  <form action="{{ route('nomina.import') }}" method="post" enctype="multipart/form-data">
            @csrf
            


            <input type="file" name="file">

            <button class='btn btn-primary float-right'>Importar Nómina</button>
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
                            <th>Salario Semanal</th>
                            <th>Salario Diario</th>
                            <th>Salario por Hora</th>
                            <th>Salario por Hora Extra Diuerna</th>
                            <th>Salario Integral</th>
                            <th>Feriado</th>
                            <th>Días Laborados</th>
                            <th>Utilidades</th>
                            <th>Monto Total</th>
					        <th class="text-center">Acciones</th>
				          </tr>
				          </thead>



@foreach($nomina as $no)

			            <tbody>
				          <tr>
					          <td class="font-weight-semi-bold">{{ $no->id }}</td>
					          <td class="font-weight-semi-bold">{{ $no->salarioSemanal }}</td>
					          <td class="font-weight-semi-bold">{{ $no->salarioDiario }}</td>
					          <td class="font-weight-semi-bold">{{ $no->salarioHora }}</td>
					          <td class="font-weight-semi-bold">{{ $no->salarioHoraExtraDiurno }}</td>
                              <td class="font-weight-semi-bold">{{ $no->salarioIntegral }}</td>
					          <td class="font-weight-semi-bold">{{ $no->feriado }}</td>
					          <td class="font-weight-semi-bold">{{ $no->diasLaborados }}</td>
					          <td class="font-weight-semi-bold">{{ $no->utilidades }}</td>
                              <td class="font-weight-semi-bold">{{ $no->montoTotal }}</td>
					          <td class="text-center">
                              
						          <!-- Actions -->
						          <div class="dropdown">
							          <a id="basicTable1MenuInvoker" class="u-icon-sm link-muted" href="#" role="button" aria-haspopup="true" aria-expanded="false"
							             data-toggle="dropdown"
							             data-offset="8">
								          <span class="ti-more"></span>
							          </a>
							          <!-- End Actions Invoker -->
                                      
                                      

							          <!-- Actions Menu -->
							          <div class="dropdown-menu dropdown-menu-right" style="width: 150px;">
								          <div class="card border-0 p-3">
									          <ul class="list-unstyled mb-0">
                                              
										          <li class="mb-3">
											          <a class="d-block link-dark" href="#editModal" data-mysalariosem="{{$no->salarioSemanal}}" data-mysalariodi="{{$no->salarioDiario}}" data-mysalarioho="{{$no->salarioHora}}" data-mysalariohoex="{{$no->salarioHoraExtraDiurno}}" data-mysalarioin="{{$no->salarioIntegral}}" data-myferiado="{{$no->feriado}}" data-mydiasla="{{$no->diasLaborados}}" data-myutilidades="{{$no->utilidades}}" data-mymontot="{{$no->montoTotal}}" data-noid="{{$no->id}}" data-toggle="modal">Editar</a>
										          </li>                                              
                                              

                                                  
                                                  
										          <li>
											          <a class="d-block link-dark" href="#deleteModal" data-noid="{{$no->id}}" data-toggle="modal">Eliminar</a>
										          </li>
                                                  
									          </ul>
								          </div>
							          </div>
							          <!-- End Actions Menu -->
                                      
                                      
<!--						          </div>
-->						          <!-- End Actions -->
					          </td>
				          </tr>
				         
					      										@endforeach

				          </tbody>
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
											<label for="salarioSemanal">Salario Semanal</label>
											<input id="salarioSemanal" name="salarioSemanal" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
                                        
										<div class="form-group">
											<label for="salarioDiario">Salario Diario</label>
											<input id="salarioDiario" name="salarioDiario" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
                                        
                                        
										<div class="form-group">
											<label for="salarioHora">Salario por Hora</label>
											<input id="salarioHora" name="salarioHora" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
                                        
										<div class="form-group">
											<label for="salarioHoraExtraDiurno">Salario por Hora extra Diurna</label>
											<input id="salarioHoraExtraDiurno" name="salarioHoraExtraDiurno" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>

										<div class="form-group">
											<label for="salarioIntegral">Salario Integral</label>
											<input id="salarioIntegral" name="salarioIngegral" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>                                        
                                        
										<div class="form-group">
											<label for="feriado">Feriado</label>
											<input id="feriado" name="feriado" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>   

										<div class="form-group">
											<label for="diasLaborados">Días laborados</label>
											<input id="diasLaborados" name="diasLaborados" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>   

										<div class="form-group">
											<label for="utilidades">Utilidades</label>
											<input id="utilidades" name="utilidades" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>   
                                        
										<div class="form-group">
											<label for="montoTotal">Monto Total</label>
											<input id="montoTotal" name="montoTotal" class="form-control form-pill" type="text" placeholder="Placeholder">
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
						<h5 class="modal-title" id="editModal">Eliminar contenido de nómina</h5>
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


			</div>
			<!-- End Content -->
		</main>
		<!-- End Main -->

@include('scripts')

<script>

  
  $('#editModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
	  
	  var id = button.data('noid') 
      var salarioSemanal = button.data('mysalariosem') 
      var salarioDiario = button.data('mysalariodi') 
	  var salarioHora = button.data('mysalarioho') 
      var salarioHoraExtraDiurno = button.data('mysalariohoex')
	  var salarioIntegral = button.data('mysalarioin') 
	  var feriado = button.data('myferiado') 
	  var diasLaborados = button.data('mydiasla') 
	  var utilidades = button.data('myutilidades') 
	  var montoTotal = button.data('mymontot') 
	  
      var modal = $(this)
	  
      modal.find('.modal-body #noid').val(id);
      modal.find('.modal-body #salarioSemanal').val(salarioSemanal);
      modal.find('.modal-body #salarioDiario').val(salarioDiario);
	  modal.find('.modal-body #salarioHora').val(salarioHora);
      modal.find('.modal-body #salarioHoraExtraDiurno').val(salarioHoraExtraDiurno);
      modal.find('.modal-body #salarioIntegral').val(salarioIntegral);
      modal.find('.modal-body #feriado').val(feriado);
      modal.find('.modal-body #diasLaborados').val(diasLaborados);
      modal.find('.modal-body #utilidades').val(utilidades);
      modal.find('.modal-body #montoTotal').val(montoTotal);	  	  	  	  	  
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