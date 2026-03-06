# VIP2CARS - Sistema de Gestión de Vehículos y Encuestas

## Descripción

Este proyecto fue desarrollado como parte de una prueba técnica para el puesto de **Analista Programador PHP**.

El sistema fue desarrollado utilizando el framework **Laravel** y permite:

* Registrar vehículos.
* Registrar datos del cliente asociados al vehículo.
* Visualizar los vehículos registrados.
* Implementar un sistema básico de encuestas anónimas.

---

## Tecnologías utilizadas

* PHP
* Laravel
* MySQL
* XAMPP
* Blade (motor de vistas de Laravel)

---

## Requisitos

Antes de ejecutar el proyecto se necesita tener instalado:

* PHP 8+
* Composer
* MySQL
* XAMPP o servidor local similar

---

## Instalación

1. Clonar el repositorio:

```
git clone https://github.com/USUARIO/vip2cars.git
```

2. Entrar al proyecto:

```
cd vip2cars
```

3. Instalar dependencias de Laravel:

```
composer install
```

4. Crear archivo `.env`:

```
cp .env.example .env
```

5. Configurar la base de datos en el archivo `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vip2cars_db
DB_USERNAME=root
DB_PASSWORD=
```

6. Generar la clave de la aplicación:

```
php artisan key:generate
```

7. Ejecutar migraciones:

```
php artisan migrate
```

---

## Ejecutar el proyecto

Para iniciar el servidor local ejecutar:

```
php artisan serve
```

Luego abrir en el navegador:

```
http://127.0.0.1:8000
```

---

## Funcionalidades

### CRUD Vehículos

Permite registrar:

* Placa
* Marca
* Modelo
* Año de fabricación
* Nombre del cliente
* Apellidos del cliente
* Número de documento
* Correo
* Teléfono

Los datos se almacenan en la base de datos MySQL.

---

### Sistema de Encuestas

Se implementó un módulo simple de encuestas anónimas que permite visualizar encuestas registradas en la base de datos.

El diagrama de base de datos se encuentra en:

/database/diagrama_encuestas.png

El script SQL de creación se encuentra en:

/database/encuestas.sql

Ruta de acceso:

```
http://127.0.0.1:8000/encuestas
```

---

## Autor

Desarrollado por:
**Cristhian Magni**

Prueba técnica para **VIP2CARS**.
