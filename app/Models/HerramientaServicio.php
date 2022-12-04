<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HerramientaServicio extends Model
{
    use HasFactory;

    protected $table= 'herramienta_has_servicio';

    protected $fillable = [
        'herramienta_id',
        'servicio_id'
    ];
}
