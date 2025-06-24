<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // $cars = DB::select('SELECT * FROM cars');
    $cars = DB::table('cars')->simplePaginate(5);
    return view('homepage', ['cars' => $cars]);
    // return $cars;

});
Route::get('/about-us', function () {
    return view('about-us');
});
