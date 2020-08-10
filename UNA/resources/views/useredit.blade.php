@extends('layouts.other')
  
@section('content')

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Head -->
<head>
    <title>Sistema UNA</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="logouna.png" type="image/x-icon">

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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <input id="status" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status">

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label for="jobtitle" class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>

                            <div class="col-md-6">
                                <input id="jobtitle" class="form-control @error('jobtitle') is-invalid @enderror" name="jobtitle" value="{{ old('jobtitle') }}" required autocomplete="jobtitle">

                                @error('jobtitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Código') }}</label>

                            <div class="col-md-6">
                                <input id="code" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code">

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                        
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-body pt-0">
    <div>
        
    
    <div class="form-group">
        <label for="exampleInputText2_1">Nombre</label>
        <input id="exampleInputText2_1" class="form-control form-pill" type="text" placeholder="Inserte nombre...">
    </div>
    
    </div>
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