<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'marca',
        'modelo',
        'anio_fabricacion',
        'nombre_cliente',
        'apellidos_cliente',
        'documento_cliente',
        'correo_cliente',
        'celular_cliente'
    ];
    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
