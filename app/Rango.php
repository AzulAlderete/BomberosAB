<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rango extends Model
{
    protected $fillable = ['descripcion'];

    public function voluntarios() {
        return $this->hasMany(Voluntario::class);
    }
}

