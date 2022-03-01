<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoHerramienta extends Model
{
    use HasFactory;
    protected $table= 'tipoherramienta' ; 
    protected $fillable = [
        'descripcion'
    ];

    /* definicion de relacion: un tipo de herramienta
    tiene muchas herramientas */
    public function herramientas() {
        return $this->hasMany(Herramienta::class);
    }
}
