<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'codigo', 'patente',
        'denominacion', 'estado',
        'tipo_vehiculo_id'
    ];

    public function tipoVehiculo() {
        return $this->belongsTo( TipoVehiculo::class );
    }
}
