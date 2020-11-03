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

             <span class="info-box-number">Total: {{ $total }}</span>

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

              <span class="info-box-number">Total: {{ $total2 }}</span>


            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      

			<!-- Content -->
			<div class="u-content">
				
					<!-- Card -->
	        <div class="card mb-5">
	        	<!-- Card Header -->
						<header class="card-header d-flex align-items-center justify-content-between">
							<h2 class="h4 card-header-title">Inicio</h2>
						</header>
						<!-- End Card Header -->
                        
		        <!-- Card Body -->
	          <div class="card-body pt-0">
		          <!-- Base Colors -->
							<div class="row col-15" >





                        <canvas id="myChart" width="200" height="200"></canvas>










		          </div>
		          <!-- End Base Colors -->
	          </div>
		        <!-- End Card Body -->
	        </div>
					<!-- End Card -->
					
                                   




@include('layouts.footer')


			</div>
			<!-- End Content -->
		</main>
		<!-- End Main -->

@include('scripts')



<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Egresos', 'Ingresos'],
        datasets: [{
            label: 'Total ',
            data: [{{ $total }}, {{ $total2 }}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

</body>
	<!-- End Body -->
</html>



@endsection