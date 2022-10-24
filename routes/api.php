<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/bicicletas', App\Http\Controllers\Api\V1\BicicletaController::class)
    ->only(['index', 'show', 'store']);

Route::apiResource('v1/bicicletas', App\Http\Controllers\Api\V1\BicicletaController::class)
    ->only(['destroy'])
    ->middleware('auth:sanctum');

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
