<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonController;

Route::get('/', HomeController::class);

Route::get('login', [PersonController::class,'login']);
Route::get('create', [PersonController::class,'createuser']);


Route::get('/persons', [PersonController::class, 'index']);
Route::post('/persons', [PersonController::class, 'store']);
Route::get('/persons/{id}', [PersonController::class, 'show']);
Route::put('/persons/{id}', [PersonController::class, 'update']);
Route::delete('/persons/{id}', [PersonController::class, 'destroy']);

