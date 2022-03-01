<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculo';
    protected $fillable = [
        'codigo', 'patente',
        'denominacion', 'estado',
        'tipo_vehiculo_id'
    ];

    public function tipoVehiculo() {
        return $this->belongsTo( TipoVehiculo::class );
    }
}
