<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    
    protected $table= 'servicio';

    protected $fillable = [
        'id',
        'fecha',
        'ubicacion',
        'tipo_servicio_id',
        
        'created_at',
        'updated_at'
    ];
}
