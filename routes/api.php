<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\pepdidoController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\subcategoriaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, "login"]);
    Route::post('logout', [AuthController::class, "logout"]);
    Route::post('refresh', [AuthController::class, "refresh"]);
    Route::post('me', [AuthController::class, "me"]);
});

Route::middleware(['auth:api'])->group(function () {
    Route::apiResource("categoria",categoriaController::class);
    Route::apiResource("subcategoria",subcategoriaController::class);
    Route::apiResource("producto",productoController::class);
    Route::apiResource("cliente",clienteController::class);
    Route::apiResource("pedido",pepdidoController::class);
});