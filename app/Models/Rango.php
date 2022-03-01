<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rango extends Model
{
    use HasFactory;

    protected $table= 'rango'; 
    protected $fillable = ['descripcion'];

    public function voluntarios() {
        return $this->hasMany(Voluntario::class);
    }
}
