@extends('layouts.app')

@section('content')

        <link href="{{ asset('css/login.css') }}" rel="stylesheet">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2>Loguéate aquí</h2>

    <!-- Login Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
      <input id="code" type="text" class="fadeIn second{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus placeholder="Código UNA">
      
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror      
      
      
      <input id="password" type="password" autocomplete="new-password"  class="fadeIn third{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña">
      
     							 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
      
      
      <input type="submit" class="fadeIn fourth" value="Enviar">
    </form>

    <!-- Remind Passowrd -->
   

  </div>
</div>
@endsection
