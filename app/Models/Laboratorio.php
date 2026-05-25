<?php
/*
|--------------------------------------------------------------------------
| Prueba Técnica Máster Central
|--------------------------------------------------------------------------
| Autor: Sean Adrian Richard Vargas Cantor
| Modelo de Laboratorio.
|--------------------------------------------------------------------------
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
        protected $fillable = [
        'nombre',
        'capacidad'
    ];
    public function reservas() {
        return $this->hasMany(Reserva::class);
    }
}
