<?php

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

use App\Http\Controllers\Controller;

Route::get('/', 'ClientController@index');

Route::get('/introduce', function () {
  return view('frontend/introduce');
});

Route::get('/doctors', function () {
  return view('frontend/doctors');
});

Route::get('/doctors', function () {
  return view('frontend/library');
});