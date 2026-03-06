@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body class="container mt-4">

<nav class="mb-4">
<a class="btn btn-primary"
href="/vehiculos">Vehículos</a>

<a class="btn btn-success"
href="/clientes">Clientes</a>

<a class="btn btn-warning" 
href="/encuestas">Encuestas</a>
</nav>

@yield('content')

</body>
</html>

@endsection