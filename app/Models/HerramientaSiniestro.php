<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HerramientaSiniestro extends Model
{
    use HasFactory;

    protected $table= 'herramienta_has_siniestro';

    protected $fillable = [
        'herramienta_id',
        'siniestro_id'
    ];
}
