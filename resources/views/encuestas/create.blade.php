@extends('layouts.app')

@section('content')
<h1>Crear Nueva Encuesta</h1>

<form action="{{ route('encuestas.store') }}" method="POST">
    @csrf
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion"></textarea>
    <br>
    <button type="submit">Guardar Encuesta</button>
</form>
@endsection