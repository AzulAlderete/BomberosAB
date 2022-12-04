<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoEmergencia extends Model
{
    use HasFactory;

    protected $table= 'estado_emergencia';

    protected $fillable = [
        'id',
        'descripcion',

    ];
}
