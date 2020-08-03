<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title class="stroke">Sistema UNA</title>


    <!-- Scripts -->

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
   
    
</head>

        


        <main class="container">
            @yield('content')
            
        </main>
    </div>
    
  
    
</body>
</html>