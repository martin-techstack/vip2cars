@if(session('success'))
<p style="color:green">
{{ session('success') }}
</p>
@endif

<h1>Registrar Vehículo</h1>

<table border="1">
<tr>
    <th>Placa</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Año</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Documento</th>
    <th>Correo</th>
    <th>Celular</th>
</tr>

@foreach($vehiculos as $vehiculo)
<tr>
    <td>{{ $vehiculo->placa }}</td>
    <td>{{ $vehiculo->marca }}</td>
    <td>{{ $vehiculo->modelo }}</td>
    <td>{{ $vehiculo->anio_fabricacion }}</td>
    <td>{{ $vehiculo->nombre_cliente }}</td>
    <td>{{ $vehiculo->apellidos_cliente }}</td>
    <td>{{ $vehiculo->documento_cliente }}</td>
    <td>{{ $vehiculo->correo_cliente }}</td>
    <td>{{ $vehiculo->celular_cliente }}</td>
</tr>
@endforeach

</table>

<form action="{{ route('vehiculos.store') }}" method="POST">
@csrf

<input name="placa" placeholder="Placa"><br>

<input name="marca" placeholder="Marca"><br>

<input name="modelo" placeholder="Modelo"><br>

<input name="anio_fabricacion" placeholder="Año"><br>

<input type="text" name="nombre_cliente" placeholder="Nombre del cliente"><br>

<input type="text" name="apellidos_cliente" placeholder="Apellidos del cliente"><br>

<input type="text" name="documento_cliente" placeholder="Nro de documento"><br>

<input type="email" name="correo_cliente" placeholder="Correo del cliente"><br>

<input type="text" name="celular_cliente" placeholder="Celular del cliente"><br>

<button type="submit">Guardar</button>

</form>