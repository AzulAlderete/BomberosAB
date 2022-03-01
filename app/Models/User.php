<?php
 
namespace App\Models;
 
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
 
class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
 
    /**
     * Los atributos que son asignables en masa.
     *
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
 
    /**
     * Los atributos que deben ocultarse para los arrays.
     *
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
 
    /**
     * Los atributos que se deben convertir a los tipos nativos.
     *
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
