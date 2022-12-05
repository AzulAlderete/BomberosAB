<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SolicitanteController;
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


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

/*Route::mmiddleware('auth.api')->group(function(){
    Route::get('get-user',[PassportAuthController::class, 'userInfo']);
    Route::resource('solicitante',[SolicitanteController::class]);
});*/
Route::apiResource('solicitante', SolicitanteController::class)->middleware('auth:api');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});