<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CarController extends Controller
{
    function admin(){
        $cars = DB::table('cars')->simplePaginate(5);
        return view('admin.adminDashboard', ['cars' => $cars]);
    } 
    function addCar(){
        
    }
    function delete($id){
        echo "Deleting car with ID: $id";
        DB::table('cars')->where('id', $id)->delete();
        return redirect('/admin');
    }

}
