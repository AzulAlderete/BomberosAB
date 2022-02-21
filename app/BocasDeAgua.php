<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BocasDeAgua extends Model
{
    protected $fillable = [
        'direccion', 'numero', 'latitud', 'longitud'
    ];
}
