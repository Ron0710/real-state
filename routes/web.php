<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
Route::get('/', function () {
    return view('dashboard');
});


Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload-property', [PropertyController::class, 'upload'])->name('property.upload');