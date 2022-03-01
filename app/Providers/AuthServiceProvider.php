<?php
namespace App\Providers;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
 
 
class AuthServiceProvider extends ServiceProvider
{
    /**
     * Las asignaciones de políticas para la aplicación.
     * 
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];
 
 
    /**
     * Registre cualquier servicio de autenticación/autorización.
     *
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}