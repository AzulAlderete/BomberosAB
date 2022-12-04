<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    use HasFactory;

    
    protected $table= 'solicitante';

    protected $fillable = [
        'id',
        'nombre',
        'documento',
        'telefono',
        'direccion',
        'servicio_id',
        
        'created_at',
        'updated_at'
    ];
}
