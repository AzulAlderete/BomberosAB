<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // campos a guardar en la bd
    protected $fillable = ['nombre', 'descripcion'];

    // definicion de relacion rol tiene muchos usuarios
    public function users(){
        return $this->hasMany(User::class);
    }
} 
