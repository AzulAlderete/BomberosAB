<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;

    protected $table= 'recurso_e_insumo';

    protected $fillable = [
        'id',
        'codigo',
        'descripcion',
        'stock',
               
        'created_at',
        'updated_at'
    ];
}
