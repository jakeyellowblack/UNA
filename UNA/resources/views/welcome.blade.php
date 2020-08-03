<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Files</title>
    </head>
    <body>
        <h1>Exportar datos</h1>

        <p>
            Clic <a href="{{ route('presupuesto.presupuesto') }}">aquí</a>
            para descargar en EXCEL a los usuarios
        </p>
        
        
        <form action="{{ route('presupuesto.import') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="file">

            <button class='btn-btn-primary'>Importar Presupuesto</button>
        </form>

    </body>
</html>
