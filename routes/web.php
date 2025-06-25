<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    // $cars = DB::select('SELECT * FROM cars');
    $cars = DB::table('cars')->simplePaginate(5);
    return view('homepage', ['cars' => $cars]);
    // return $cars;

});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/admin',[
    CarController::class, 'admin'
]);
Route::delete('/admin/delete/{id}',[
 
    CarController::class, 'delete'
])->name('car.delete');