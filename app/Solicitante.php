<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $fillable = [
        'nombre', 'apellido',
        'telefono', 'documento',
        'direccion'
    ];

    public function siniestros() {
        return $this->hasMany(Siniestro::class);
    }
}
