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

	<form class="form-group" method="POST" action="{{ route('reformulacion.store') }}" enctype="multipart/form-data">
		@csrf
	    <div class="input-group">

			<label class="input-group-btn">
				<span class="btn btn-primary btn-file">
			        Seleccione un archivo... <input type="file" id="banner" name="banner" style="visibility: hidden; position: absolute;" class="hidden">
			    </span>
			</label>

			<input class="form-control" id="banner_captura" readonly="readonly" name="banner_captura" type="text" value="">
	        <button class='btn btn-primary float-right' type="submit">Enviar Reformulación</button>

	    </div>
	</form>





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