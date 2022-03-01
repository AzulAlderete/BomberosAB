<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    use HasFactory;
    protected $table = 'voluntario';
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
