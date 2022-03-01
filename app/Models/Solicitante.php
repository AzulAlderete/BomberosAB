<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    use HasFactory;
    protected $table= 'solicitante';
    protected $fillable = [
        'nombre', 'apellido',
        'telefono', 'documento',
        'direccion'
    ];

    public function siniestros() {
        return $this->hasMany(Siniestro::class);
    }
}
