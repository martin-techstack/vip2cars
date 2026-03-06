@extends('layouts.app')

@section('content')
<h1>Editar Encuesta</h1>

<form action="{{ route('encuestas.update', $encuesta->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" value="{{ $encuesta->titulo }}" required>
    <br>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion">{{ $encuesta->descripcion }}</textarea>
    <br>

    <button type="submit">Actualizar Encuesta</button>
</form>
@endsection