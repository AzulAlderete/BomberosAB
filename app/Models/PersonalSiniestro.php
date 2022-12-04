<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalSiniestro extends Model
{
    use HasFactory;

    protected $table= 'personal_has_siniestro';

    protected $fillable = [
        'personal_id',
        'siniestro_id'
    ];
}
