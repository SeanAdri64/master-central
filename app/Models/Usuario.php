<?php
/*
|--------------------------------------------------------------------------
| Prueba Técnica Máster Central
|--------------------------------------------------------------------------
| Autor: Sean Adrian Richard Vargas Cantor
| Modelo de Usuario.
|--------------------------------------------------------------------------
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
protected $fillable = [
    'nombre',
    'identificacion',
    'tipo_usuario',
    'dependencia'
];
    public function reservas() {
        return $this->hasMany(Reserva::class);
    }
}
