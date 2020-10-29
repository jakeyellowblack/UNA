@extends('layouts.other')
  
@section('content')

<!DOCTYPE html>
<html lang="en" class="no-js">
	<!-- Head -->
<head>
    <title>Sistema UNA</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<!-- Web Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

		<!-- Components Vendor Styles -->
                <link rel="stylesheet" href="assets/css/all-icons.css">
                <link rel="stylesheet" href="assets/css/fontawesome.css">

		<link rel="stylesheet" href="assets/vendor/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

		<!-- Theme Styles -->
            <link href="assets/css/all.css" rel="stylesheet" type="text/css" />

     <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/jquery-ui.min.css"  rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />


		<link rel="stylesheet" href="assets/css/theme.css">

		<style type="text/css">
		.no-js body .u-header .u-header-left .u-header-logo {
	font-size: 25px;
}


h6 {
	font-weight: bold;
}
h6 {
	font-size: 70px;
}
h6 {
	text-align: center;
}
        </style>
</head>
	<!-- End Head -->





	<!-- Body -->
<body>


<br></br>



	<div class="container-fluid spark-screen">
		<div class="row">
		
		
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ti-credit-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ingresos</span>
              </br>
<!--              <a href="/summary/create?type=add">Añadir ingreso</a>--> 
			 <a href="/tpresupuesto">Añadir ingreso</a>                      
</div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
        
        
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow "><i class="ti-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Egresos</span>
              </br>
             <a href="/tpresupuesto">Añadir egresos</a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ti-thumb-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ingreso</span>
              </br>
              <span class="info-box-number">Value</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ti-align-justify"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Egreso</span>
              </br>
              <span class="info-box-number">Value</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      

<!-- Content -->
			<div class="u-content">
				<!-- Content Body -->
				<div class="u-body">
                					<h1 class="h2 mb-2">Inicio</h1>

					<!-- Doughnut Chart -->
					<div class="row">

							<!-- Performance Chart -->
							<div class="card h-100">
								<!-- Card Header -->
							


									<ul class="list-inline mb-0">
										<div class="container-fluid">
                                        
                                   



<h6>¡Bienvenid@ al Sistema de gestión financiero para el Departamento de Control Presupuestario de la Universidad Nacional Abierta (UNA)!</h6>

				<!-- Default box -->
				<div class="box">
                
					<div class="box-header with-border">
						<i class="fa fa-bar-chart"></i><h3 class="box-title">Grafica de movimientos</h3>
					</div>
                    
					<div class="col-sm-12 add_top_10">
						<form id="form_filter">
                        
							<div class="form-group col-sm-5">
								<input type="date" name="start" id="start" class="form-control">
							</div>
                            
							<div class="form-group col-sm-5">
								<input type="date" name="finish" id="finish" class="form-control">
							</div>
                            
							<div class="form-group col-sm-2">
								<a href="javascript:void(0)" id="filter_btn" class="btn btn-sm btn-default form-control"><i class="fa fa-filter"></i> Filtrar</a>
							</div>
                            
						</form>
						
					</div>
                    
					<div class="box-body">
                    
						<canvas id="myChart" class="col-sm-12"></canvas>
                        
						<center><label>Abonos&nbsp; </label><label class="entrada" >&nbsp;&nbsp;&nbsp;&nbsp; </label> &nbsp;&nbsp;  <label>Retiros &nbsp;</label><label class="salida" > &nbsp;&nbsp;&nbsp;&nbsp;</label></center>
                        
					</div>
				</div>
			</div>
		</div>
	</div>


					</ul>
					<!-- End Footer Menu -->

					<!-- Copyright -->
					<!-- End Copyright -->
@include('layouts.footer')


			</div>
			<!-- End Content -->
		</main>
		<!-- End Main -->

@include('scripts')


</body>
	<!-- End Body -->
</html>



@endsection