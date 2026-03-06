@extends('layouts.app')

@section('content')
<h1>{{ $encuesta->titulo }}</h1>
<p>{{ $encuesta->descripcion }}</p>

<a href="{{ route('encuestas.edit', $encuesta->id) }}">Editar Encuesta</a>
<a href="{{ route('encuestas.index') }}">Volver al listado</a>
@endsection