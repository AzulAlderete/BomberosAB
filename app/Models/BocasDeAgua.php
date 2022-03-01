<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BocasDeAgua extends Model
{
    use HasFactory;
    protected $table = 'bocasdeagua';
    protected $fillable = [
        'direccion', 'numero', 'latitud', 'longitud'
    ];
}
