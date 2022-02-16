<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSiniestro extends Model
{
    protected $fillable = ['descripcion'];

    public function siniestros() {
        return $this->hasMany(Siniestro::class);
    }
}
