<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('car', 'CarController@newCarForm');
Route::post('car', 'CarController@newCar');

Route::get('car', 'CarController@allCars');

Route::get('car/{id}', 'CarController@particularCar');
Route::post('review/add', 'ReviewsController@addReview');
