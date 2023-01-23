<?php

use Illuminate\Support\Facades\Route;
use App\Train;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    for ($i = 0; $i < 100; $i++){
        $train = new Train();
        $train->company= 'trenord';
        $train->departure_station='milano';
        $train->arrival_station='bergamo';
        $train->departure_time='13.40';
        $train->arrival_time='14.57';
        $train->train_code='VF02UL00';
        $train->number_of_carriages=8;
        $train->in_time=yes;
        $train->deleted=no;
    }
    return view('welcome');
});
