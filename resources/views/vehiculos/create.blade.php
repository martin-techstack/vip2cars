<h1>Registrar Vehículo</h1>

<form action="{{ route('vehiculos.store') }}" method="POST">
    @csrf

    <input type="text" name="placa" placeholder="Placa">

    <input type="text" name="marca" placeholder="Marca">

    <input type="text" name="modelo" placeholder="Modelo">

    <input type="number" name="anio_fabricacion" placeholder="Año">

    <input type="text" name="nombre_cliente" placeholder="Nombre">

    <input type="text" name="apellidos_cliente" placeholder="Apellidos">

    <input type="text" name="documento_cliente" placeholder="Documento">

    <input type="email" name="correo_cliente" placeholder="Correo">

    <input type="text" name="celular_cliente" placeholder="Celular">

    <button type="submit">Guardar</button>

</form>