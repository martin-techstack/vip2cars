<!DOCTYPE html>
<html>
<head>
    <title>Encuestas</title>
</head>
<body>
    <h1>¡Encuestas cargadas correctamente!</h1>
    <ul>
        @foreach($encuestas as $encuesta)
            <li>{{ $encuesta->titulo }} - {{ $encuesta->descripcion }}</li>
        @endforeach
    </ul>
</body>
</html>


