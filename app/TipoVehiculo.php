<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    protected $fillable = ['descripcion'];

    public function vehiculos(){
        return $this->hasMany(Vehiculo::class);
    }
}
