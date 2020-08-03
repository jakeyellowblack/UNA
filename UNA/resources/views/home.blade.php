@extends('layouts.app')
  
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema UNA</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom fonts for this template -->
    
   <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/freelancer.css') }}" rel="stylesheet">
    <style type="text/css">
    #page-top #about .container .row .col-lg-4.ml-auto .lead {
	text-align: justify;
}
    #page-top #about .container .row .col-lg-4.mr-auto .lead {
	text-align: justify;
}


    #mainNav {
	display: none;
	position: absolute;
	top: 0;
	left: 0;
	background: #fff;
}
    #page-top .portfolio-modal-dialog.bg-white .container.text-center .row .col-lg-8.mx-auto .btn.btn-primary.btn-lg.rounded-pill.portfolio-modal-dismiss {
	font-style: normal;
	  font-size: 13px;
	  text-align: center;
	  width: 80px;
	  height: 40px;
}
    
    #page-top #portfolio .container .row {
	color: #2c3e50;
}
    
    #page-top  .portfolio-modal-dialog.bg-white .container.text-center .row .col-lg-8.mx-auto .mb-5 {
	text-align: justify;
	font-size: 36px;
}
    </style>
  </head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      
    </nav>

<!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1 class="text-uppercase mb-0">¡Bienvenido al </h1>
        <h1 class="text-uppercase mb-0">Sistema UNA!</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Autores:</h2>
        <h2 class="font-weight-light mb-0">Víctor Lara - Rafael Rodríguez - José Camarinha - Jhorman Centeno</h2>
      </div>
    </header>


    
    
    

<!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/freelancer.min.js') }}"></script>
    
    

      <!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
            @yield('scripts')

</html>



@endsection