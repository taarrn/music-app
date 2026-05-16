<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusikController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/musik', [MusikController::class, 'index']);