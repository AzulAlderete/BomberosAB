<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    
    protected $table= 'vehiculo';

    protected $fillable = [
        'id',
        'patente',
        'codigo',
        'estado_id',
        'tipo_vehiculo_id',
        
        'created_at',
        'updated_at'
    ];
}
