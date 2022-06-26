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
Route::get('/restaurant', function () {
    return view('restaurant');
});
Route::get('/camping', function () {
    return view('camping');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/Reservation', function () {
    return view('reservation');
});
