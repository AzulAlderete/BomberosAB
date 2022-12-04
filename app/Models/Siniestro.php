<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siniestro extends Model
{
    use HasFactory;

    
    protected $table= 'siniestro';

    protected $fillable = [
        'id',
        'numero',
        'descripcion',
        'boca_agua_id',
        'solicitud_id',
        
        'created_at',
        'updated_at'
    ];
}
