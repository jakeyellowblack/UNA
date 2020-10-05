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
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        @yield('scripts')

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/btns.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
   
    
</head>
<body background="hero-bg.png">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('home') }}">
                <img src=" {{ asset('LogoUNA.png') }} " width="35" height="35" alt="">
        			Sistema UNA
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
</button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

</ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    
                        <!-- Authentication Links -->
                        @guest
                     
                            <!--<li class="nav-item {{ request()->is('login') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar al Sistema') }}</a>
                            </li>-->
                      <!--<li class="nav-item {{ request()->is('register') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
</li>-->
                            
                        @else
                <nav class="nav-link">
                    <ul class="navbar-nav mr-auto">
                    
                    
                     <!--<li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}" class="nav-link">{{ __('Página principal') }}</a>
</li>-->
                    
                    @can('user.index')
                    <li class="nav-item {{ request()->is('user') ? 'active' : '' }}">
                            <a href="{{ route('user.index') }}" class="nav-link">{{ __('Usuarios') }}</a>
</li>
                        @endcan
                        
                        
                        
                    <!--@can('role.index')
<li class="nav-item {{ request()->is('role') ? 'active' : '' }}">
                            <a href="{{ route('role.index') }}" class="nav-link">{{ __('Roles') }}</a>
						</li>
                        @endcan-->
                        
                        
                      @can('lugar.index')
                        <li class="nav-item {{ request()->is('lugar') ? 'active' : '' }}">
                            <a href="{{ route('lugar.index') }}" class="nav-link">{{ __('Unidades Administrativas') }}</a>
</li>
                        @endcan
                        
           

<!--                    	<li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" 
                              		href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="caret">Equipos</span>

                              </a>-->
                              
         
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                              
			@can('equipo.index')
        	<a class="dropdown-item" href="{{ route('equipo.index') }}">{{ __('Inventario de Equipos') }}</a>
            @endcan                  
            
            @can('tipoequipo.index')         			  
        	<a class="dropdown-item" href="{{ route('tipoequipo.index') }}">{{ __('Tipos de Equipos') }}</a>
            @endcan
            
            @can('marcaequipo.index')
        	<a class="dropdown-item" href="{{ route('marcaequipo.index') }}">{{ __('Marcas de Equipos') }}</a>   
            @endcan
            
             @can('asignado.index')
        	<a class="dropdown-item" href="{{ route('asignado.index') }}">{{ __('Asignación de Equipos') }}</a>
			@endcan
             

                          </div>
				</li>
                


                     
                      
                      

</div>
                      </li>

                    
                        
                        
<ul class="navbar-nav ml-auto">
                      <li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}<span class="caret"></span>
                      </a>
                              
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                          </a>
                                
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                        </div>
                    </li>
                      @endguest
                </ul>
                </div>
            </div>
        </nav>
        


        <main class="container">
            @yield('content')
            
        </main>
    </div>
    
  
    
</body>
</html>