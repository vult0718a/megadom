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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/2-2', function () {
  return view('user/page/2-2');
})->name('2-2');

Route::get('/2-3', function () {
  return view('user/page/2-3');
})->name('2-3');

Route::get('/3-1', function () {
  return view('user/page/3-1');
})->name('3-1');

Route::get('/erectile-dysfunction', function () {
  return view('user/page/erectile_dysfunction');
})->name('erectile-dysfunction');

Route::get('/testicular-disease', function () {
  return view('user/page/testicular_disease');
})->name('testicular_disease');

Route::get('/menopause', function () {
  return view('user/page/menopause');
})->name('menopause');

Route::get('/sexually-transmitted-diseases', function () {
  return view('user/page/sexually_transmitted_diseases');
})->name('sexually_transmitted_diseases');
Route::get('/3-2', function () {
  return view('user/page/3-2');
})->name('3-2');
Route::get('/2-5', function () {
  return view('user/page/2-5');
})->name('2-5');

Route::get('/2-6', function () {
  return view('user/page/2-6');
})->name('2-6');

Route::get('/2-7', function () {
  return view('user/page/2-7');
})->name('2-7');

Route::get('/2-8', function () {
  return view('user/page/2-8');
})->name('2-8');

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

