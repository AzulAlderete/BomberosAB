<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table= 'personal';

    protected $fillable = [
        'id',
        'nombre',
        'telefono',
        'documento',
        'direccion',
        'rango_id',
        'labor_id',
        
        'created_at',
        'updated_at'
    ];
}
