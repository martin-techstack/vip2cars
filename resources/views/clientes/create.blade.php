<h1>Registrar Cliente</h1>

<form action="{{ route('clientes.store') }}" method="POST">
@csrf

<input name="nombre" placeholder="Nombre"><br>
<input name="apellidos" placeholder="Apellidos"><br>
<input name="documento" placeholder="Documento"><br>
<input name="correo" placeholder="Correo"><br>
<input name="telefono" placeholder="Teléfono"><br>

<button>Guardar</button>

</form>