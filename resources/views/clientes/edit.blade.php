<h1>Editar Cliente</h1>

<form action="{{ route('clientes.update',$cliente->id) }}"
method="POST">
@csrf
@method('PUT')

<input name="nombre" value="{{ $cliente->nombre }}"><br>
<input name="apellidos" value="{{ $cliente->apellidos }}"><br>
<input name="documento" value="{{ $cliente->documento }}"><br>
<input name="correo" value="{{ $cliente->correo }}"><br>
<input name="telefono" value="{{ $cliente->telefono }}"><br>

<button>Actualizar</button>

</form>