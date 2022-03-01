<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    use HasFactory;

    protected $table= 'herramienta'; 
    protected $fillable = [
        'codigo', 'nombre',
        'estado', 'tipo_herramienta_id'
    ];

    /* definicion de relacion: Una herramienta
    pertenece a un tipo de herramienta */
    public function tipoHerramienta(){
        return $this->belongsTo(TipoHerramienta::class);
    }
}
