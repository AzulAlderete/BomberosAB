<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table= 'role';
    // campos a guardar en la bd
    protected $fillable = ['nombre', 'descripcion'];

    // definicion de relacion rol tiene muchos usuarios
    public function users(){
        return $this->hasMany(User::class);
    }
}
