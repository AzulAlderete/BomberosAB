<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioPersonal extends Model
{
    use HasFactory;

    
    protected $table= 'servicio_has_personal';

    protected $fillable = [
        'servicio_id',
        'personal_id'
    ];
}
