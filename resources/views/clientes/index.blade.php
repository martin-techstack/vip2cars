<h1>Clientes</h1>

<a href="{{ route('clientes.create') }}">
Registrar Cliente
</a>

<table border="1">
<tr>
<th>Nombre</th>
<th>Documento</th>
<th>Correo</th>
<th>Teléfono</th>
<th>Acciones</th>
</tr>

@foreach($clientes as $cliente)
<tr>
<td>{{ $cliente->nombre }} {{ $cliente->apellidos }}</td>
<td>{{ $cliente->documento }}</td>
<td>{{ $cliente->correo }}</td>
<td>{{ $cliente->telefono }}</td>

<td>
<a href="{{ route('clientes.edit',$cliente->id) }}">
Editar
</a>

<form action="{{ route('clientes.destroy',$cliente->id) }}"
method="POST">
@csrf
@method('DELETE')
<button>Eliminar</button>
</form>

</td>
</tr>
@endforeach
</table>