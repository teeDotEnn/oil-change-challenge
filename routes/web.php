<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilChangeController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/check', [OilChangeController::class, 'check']);

Route::get('/result/{id}', [OilChangeController::class, 'check']);