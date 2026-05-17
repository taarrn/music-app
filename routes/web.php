<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusikController;
use App\Http\Controllers\ArtisController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/musik', [MusikController::class, 'index']);
Route::resource('/artis', ArtisController::class);