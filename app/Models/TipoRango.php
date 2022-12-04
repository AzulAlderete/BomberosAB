<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRango extends Model
{
    use HasFactory;

    protected $table= 'tipo_rango';

    protected $fillable = [
        'id',
        'descripcion'
 
    ];
}
