<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//ENRUTADO DE CONTROLLERS Y FUNCIONALIDADES
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [\App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [\App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [\App\Http\Controllers\CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [\App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [\App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');
Route::get('update', [\App\Http\Controllers\UserPasswordController::class, 'show']);
Route::post('update', [\App\Http\Controllers\UserPasswordController::class, 'update'])->name('register.update'); 

Route::group(['middleware' => 'auth'], function () {
    Route::resource('herramienta', App\Http\Controllers\HerramientaController::class)->only([
        'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
    ]);
    Route::resource('bocaagua', App\Http\Controllers\BocaAguaController::class)->only([
        'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
    ]);
    Route::resource('vehiculo', App\Http\Controllers\VehiculoController::class)->only([
        'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
    ]);
    Route::resource('insumo', App\Http\Controllers\InsumoController::class)->only([
        'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
    ]);
    Route::resource('estadoherramienta', App\Http\Controllers\EstadoHerramientaController::class)->only([
        'index']);
    Route::resource('menu', App\Http\Controllers\MenuController::class)->only([
        'index']);
    Route::resource('personal', App\Http\Controllers\PersonalController::class)->only([
        'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',]);    
    Route::resource('siniestro', App\Http\Controllers\SiniestroController::class)->only([
        'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
    ]);   
    Route::resource('servicio', App\Http\Controllers\ServicioController::class)->only([
        'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
    ]);  
    Route::get('dashboard', [\App\Http\Controllers\CustomAuthController::class, 'dashboard']); 

});
//Route::get('herramienta', [HerramientaController::class, 'show'])->name('herramienta.show');
//Route::post('herramienta', [HerramientaController::class, 'store'])->name('herramienta.store');*/
