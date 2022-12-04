<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    
    protected $table= 'solicitud';

    protected $fillable = [
        'id',
        'fecha',
        'ubicacion',
        'estado_emergencia_id',
        'tipo_emergencia_id',
        'solicitante_id',
        
        'created_at',
        'updated_at'
    ];
}
