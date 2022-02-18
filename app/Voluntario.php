<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    protected $fillable = [
        'nombre', 'apellido',
        'documento', 'telefono',
        'direccion', 'rango_id',
        'area_id'
    ];

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function rango() {
        return $this->belongsTo(Rango::class);
    }
}
