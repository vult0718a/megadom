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

Route::get('/', function () {
  return view('user/page/home');
})->name('home');

Route::get('/introduce', function () {
  return view('user/page/introduce');
})->name('introduce');

Route::get('/doctors', function () {
  return view('user/page/doctor');
})->name('doctor');

Route::get('/library', function () {
  return view('user/page/library');
})->name('library');

Route::get('/contact', function () {
  return view('user/page/contact');
})->name('contact');

Route::get('/2-1', function () {
  return view('user/page/2-1');
})->name('2-1');

Route::get('/post', 'PostController@getPostForUser')->name('post');


Route::group(['prefix'=>'admin'],function (){
  Auth::routes();
  Route::group(['middleware' => 'auth'],function () {
    Route::get('/', 'UserController@index')->name('admin');
    Route::get('/create', 'UserController@create')->name('admin.create');
    Route::group(['prefix'=>'post'],function (){
      Route::get('/', 'PostController@index')->name('admin.post');
      Route::get('/create', 'PostController@create')->name('admin.post.create');
      Route::post('/store', 'PostController@store')->name('admin.post.store');
    });
  });
});

