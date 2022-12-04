<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculoServicio extends Model
{
    use HasFactory;
    
    protected $table= 'vehiculo_has_servicio';

    protected $fillable = [
        'vehiculo_id',
        'servicio_id'
    ];
}
