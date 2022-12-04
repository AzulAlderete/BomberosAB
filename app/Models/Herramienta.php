<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    use HasFactory;

    protected $table= 'herramienta';

    protected $fillable = [
        'id',
        'codigo',
        'nombre',
        'estado_herramienta_id',
        'tipo_herramienta_id',
        
        'created_at',
        'updated_at'
    ];
    
    
    //protected $hidden = ['id'];
}
