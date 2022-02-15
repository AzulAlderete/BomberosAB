<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHerramienta extends Model
{
    protected $fillable = [
        'descripcion'
    ];

    /* definicion de relacion: un tipo de herramienta
    tiene muchas herramientas */
    public function herramientas() {
        return $this->hasMany(Herramienta::class);
    }
}
