<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CarController;

Route::get('/', function () {
    // $cars = DB::select('SELECT * FROM cars');
    $cars = DB::table('cars')->simplePaginate(3);
    return view('homepage', ['cars' => $cars]);
   
});


