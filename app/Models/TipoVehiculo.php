<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;
    protected $table= 'tipovehiculo'; 
    protected $fillable = ['descripcion'];

    public function vehiculos(){
        return $this->hasMany(Vehiculo::class);
    }
}
