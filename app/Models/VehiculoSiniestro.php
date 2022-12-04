<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculoSiniestro extends Model
{
    use HasFactory;
    
    protected $table= 'vehiculo_has_siniestro';

    protected $fillable = [
        'vehiculo_id',
        'siniestro_id'
    ];
}
