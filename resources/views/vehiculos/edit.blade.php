<h1>Editar Vehículo</h1>

<form action="{{ route('vehiculos.update',$vehiculo->id) }}" method="POST">
@csrf
@method('PUT')

<input name="placa" value="{{ $vehiculo->placa }}"><br>
<input name="marca" value="{{ $vehiculo->marca }}"><br>
<input name="modelo" value="{{ $vehiculo->modelo }}"><br>
<input name="anio_fabricacion"
value="{{ $vehiculo->anio_fabricacion }}"><br>

<select name="cliente_id">
@foreach($clientes as $cliente)
<option value="{{ $cliente->id }}"
{{ $vehiculo->cliente_id == $cliente->id ? 'selected' : '' }}>
{{ $cliente->nombre }}
</option>
@endforeach
</select>

<button type="submit">Actualizar</button>

</form>