<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

    Route::apiResource('tipo-herramientas', 'TipoHerramientaController');
    Route::apiResource('tipo-vehiculos', 'TipoVehiculoController');
    Route::apiResource('vehiculos', 'VehiculoController');
    Route::apiResource('tipo-siniestros', 'TipoSiniestroController');
    Route::apiResource('solicitantes', 'SolicitanteController');
    Route::apiResource('siniestros', 'SiniestroController');
    Route::apiResource('herramientas', 'HerramientaController');
    Route::apiResource('bocas-de-aguas', 'BocasDeAguaController');
    Route::apiResource('rangos', 'RangoController');
    Route::apiResource('areas', 'AreaController');
    Route::apiResource('roles', 'RoleController');
    Route::apiResource('users', 'UserController');
