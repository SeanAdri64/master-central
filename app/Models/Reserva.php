<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
    'usuario_id',
    'laboratorio_id',
    'fecha_solicitud',
    'fecha_inicio',
    'fecha_fin',
    'observacion'
];
    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }

    public function laboratorio() {
        return $this->belongsTo(Laboratorio::class);
    }
}
