<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siniestro extends Model
{
    protected $fillable = [
        'descripcion', 'direccion',
        'telefono', 'latitud',
        'longitud', 'numero',
        'fecha', 'estado_emergencia',
        'tipo_siniestro_id', 'solicitante_id',
        'vehiculo_id'
    ];

    public function tipoSiniestro() {
        return $this->belongsTo(TipoSiniestro::class);
    }

    public function solicitante() {
        return $this->belongsTo(Solicitante::class);
    }

    public function vehiculo() {
        return $this->belongsTo(Vehiculo::class);
    }
}
