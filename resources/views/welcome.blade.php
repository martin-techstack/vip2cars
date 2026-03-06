<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>VIP2CARS</title>
</head>
<body>
    <h1>Bienvenido a VIP2CARS</h1>
    <p>CRUD de Vehículos y Sistema de Encuestas Anónimas listo para usar.</p>
    <ul>
        <li><a href="{{ route('clientes.index') }}">CRUD de Clientes</a></li>
        <li><a href="{{ route('vehiculos.index') }}">CRUD de Vehiculos</a></li>
        <li><a href="{{ route('encuestas.index') }}">Sistema de Encuestas</a></li>
    </ul>
</body>
</html>
