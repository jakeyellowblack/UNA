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

<div class="u-content">
		<div class="u-body">
			<div class="col-md-13 mb-12">  
				<div class="card h-100">
	                    		        <header class="card-header">

						<h2 class="h4 card-header-title">Nueva Reformulación</h2></header>
                        	         		<hr class="my-5">

		        <header class="card-header">
	                        
								<div class="form-group">
									<label for="reformulacion">Reformulación</label> <a href="#aboutModal" data-tooltip="•Tipo de archivo permitido: .txt" data-toggle="modal" data-target="#myModal" class="btn btn-circle-micro btn-info"><span class="glyphicon glyphicon-thumbs-up"><i class="fa fa-exclamation"></i></span></a></div>


							<form class="form-group" method="POST" action="{{ route('reformulacion.store') }}" enctype="multipart/form-data">
					@csrf
				    <div class="input-group">

						<label class="input-group-btn">
							<span class="btn btn-primary btn-file">
						        Seleccione un archivo... <input type="file" id="banner" name="banner" style="visibility: hidden; position: absolute;" class="hidden">
						    </span>
						</label>

						<input class="form-control" id="banner_captura" readonly name="banner_captura" type="text" value="">
				        <button class='btn btn-primary float-right' type="submit">Enviar Reformulación</button>

				    </div>
				</form>
	     					        </header>

	                    
	                    
					
				</div>
			</div>
		</div>
	</div>

	




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

	</script>
</body>
	<!-- End Body -->
</html>



@endsection