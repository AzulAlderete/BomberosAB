<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BocaAgua extends Model
{
    use HasFactory;

    protected $table= 'boca_agua';

    protected $fillable = [
        'id',
        'numero',
        'direccion',
        'latitud',
        'longitud',
        
        'created_at',
        'updated_at'
    ];
    
    
}