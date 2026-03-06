<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
      protected $fillable = [
        'nombre',
        'apellidos',
        'documento',
        'correo',
        'telefono'
    ];
    
    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
