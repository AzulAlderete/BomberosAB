<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['descripcion'];


    public function voluntarios() {
        return $this->hasMany(Voluntario::class);
    }
}