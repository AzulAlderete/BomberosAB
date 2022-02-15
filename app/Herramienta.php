<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
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
