<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    use HasFactory;

    protected $table= 'labor';

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        
        'created_at',
        'updated_at'
    ];
}
