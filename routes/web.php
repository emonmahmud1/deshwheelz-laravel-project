<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/cars', [CarController::class, 'showCars'])->name('cars.show');


