@extends('layouts.other')
  
@section('content')

<!DOCTYPE html>
<html lang="en" class="no-js">
	<!-- Head --><head>
    <title>Sistema UNA</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<!-- Web Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Fecha', 'Ingresos', 'Egresos'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options = {
          title: '',
          hAxis: {title: 'Fecha',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
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

						
							


									<ul class="list-inline mb-0">
										<div class="container-fluid">
						<div class="col-md-20 mb-19">
							<!-- Performance Chart -->
							<div class="card h-300">
								<!-- Card Header -->
								<header class="card-header d-flex align-items-center justify-content-between">
									<h2 class="h4 card-header-title">Gráfica de movimientos</h2>

									<!-- Card Icons -->
									<ul class="list-inline mb-0">
										<li class="list-inline-item dropdown">
											<a id="performanceMenuInvoker" class="u-icon-sm link-muted" href="#" role="button" aria-haspopup="true" aria-expanded="false"
											   data-toggle="dropdown"
											   data-offset="8">
												<span class="ti-more"></span>
											</a>

											<!-- Card Menu -->
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="performanceMenuInvoker" style="width: 150px;">
												<div class="card border-0 p-3">
													<ul class="list-unstyled mb-0">
														<li class="mb-3">
															<a class="d-block link-dark" href="#">Add</a>
														</li>
														<li>
															<a class="d-block link-dark" href="#">Remove</a>
														</li>
													</ul>
												</div>
											</div>
											<!-- Card Menu -->
										</li>
									</ul>
									<!-- End Card Icons -->
								</header>
								<!-- End Card Header -->

								<!-- Card Body -->
								<div class="card-body">
									<!-- Chart -->
									<div class="mx-auto mb-6" style="max-width: 300px; max-height: 300px;">
										<canvas class="js-doughnut-chart"
										        width="300"
										        height="300"></canvas>
									</div>
									<!-- End Chart -->

									<!-- Chart Legends -->
									<ul class="list-inline d-flex align-items-center justify-content-center text-center mb-0">
										<li class="list-inline-item px-5 mr-0">
											<div class="h2 font-weight-normal text-primary mb-1">45%</div>
											<div class="text-muted">Total Sales</div>
										</li>
										<li class="list-inline-item px-5 mr-0">
											<div class="h2 font-weight-normal text-info mb-1">15%</div>
											<div class="text-muted">New Customers</div>
										</li>
										<li class="list-inline-item px-5 mr-0">
											<div class="h2 font-weight-normal text-success mb-1">15%</div>
											<div class="text-muted">Conversion</div>
										</li>
									</ul>
									<!-- End Chart Legends -->
								</div>
								<!-- End Card Body -->
							</div>
							<!-- End Performance Chart -->
						</div>                                        
                                   




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