<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// routes/api.php
use App\Http\Controllers\PropertyController;

Route::get('/properties', [PropertyController::class, 'index']);


// Define the API route
Route::get('/searchlocation', [LocationController::class, 'search']);
