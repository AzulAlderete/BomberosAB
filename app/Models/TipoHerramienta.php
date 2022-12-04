<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoHerramienta extends Model
{
    use HasFactory;

    protected $table= 'tipo_herramienta';

    protected $fillable = [
        'id',
        'descripcion'
    ];
}
