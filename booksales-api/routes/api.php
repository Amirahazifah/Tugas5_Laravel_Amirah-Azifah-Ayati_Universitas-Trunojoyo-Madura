<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorsController;

// Route user login (auth:sanctum)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API Resources
Route::apiResource('books', BookController::class);
Route::apiResource('genres', GenreController::class);
Route::apiResource('authors', AuthorsController::class);
