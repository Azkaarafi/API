<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AuthController;


Route::get('/genres', [GenreController::class, 'index']); // semua bisa lihat
Route::post('/genres', [GenreController::class, 'store']); // admin
Route::put('/genres/{id}', [GenreController::class, 'update']); // admin
Route::apiResource('films', FilmController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
