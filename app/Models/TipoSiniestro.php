<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSiniestro extends Model
{
    use HasFactory;
    protected  $table= 'tiposiniestro'; 
    protected $fillable = ['descripcion'];

    public function siniestros() {
        return $this->hasMany(Siniestro::class);
    }
}
