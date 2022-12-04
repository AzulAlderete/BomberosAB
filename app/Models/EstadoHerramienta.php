<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoHerramienta extends Model
{
    use HasFactory;

    protected $table= 'estado_herramienta';

    protected $fillable = [
        'id',
        'descripcion'
    ];
}
