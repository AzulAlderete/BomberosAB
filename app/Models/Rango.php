<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rango extends Model
{
    use HasFactory;

    
    protected $table= 'rango';

    protected $fillable = [
        'id',
        'descripcion',
        'tipo_rango_id',
        
        'created_at',
        'updated_at'
    ];
}
