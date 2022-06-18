<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\AdocaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pets', [PetController::class, 'index']);
Route::post('/pets', [PetController::class, 'store']);

Route::post('/adocoes', [AdocaoController::class, 'store']);
Route::get('/adocoes', [AdocaoController::class, 'index']);