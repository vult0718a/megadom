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

Route::get('/gioi-thieu', function () {
  return view('user/page/introduce');
})->name('introduce');

Route::get('/doi-ngu-bac-si', function () {
  return view('user/page/doctor');
})->name('doctor');

Route::get('/thu-vien', function () {
  return view('user/page/library');
})->name('library');

Route::get('/lien-he', function () {
  return view('user/page/contact');
})->name('contact');

Route::get('/lam-to-megaderm', function () {
  return view('user/page/2-1');
})->name('2-1');

Route::get('/post', 'PostController@getPostForUser')->name('post');

Route::get('/lam-to-silicone', function () {
  return view('user/page/2-2');
})->name('2-2');

Route::get('/phau-thuat-keo-dai', function () {
  return view('user/page/2-3');
})->name('2-3');

Route::get('/phau-thuat-lam-to-vien-quy-dau', function () {
  return view('user/page/2-5');
})->name('2-5');

Route::get('/phau-thuat-lam-to-megafill', function () {
  return view('user/page/2-6');
})->name('2-6');

Route::get('/phau-thuat-dieu-tri-xuat-tinh-som', function () {
  return view('user/page/2-7');
})->name('2-7');

Route::get('/dich-vu-khac', function () {
  return view('user/page/2-8');
})->name('2-8');


Route::get('/roi-loan-cuong-duong', function () {
  return view('user/page/3-1');
})->name('3-1');

Route::get('/roi-loan-xuat-tinh', function () {
  return view('user/page/3-2');
})->name('3-2');

Route::get('/benh-ly-tinh-hoan', function () {
  return view('user/page/testicular_disease');
})->name('testicular_disease');

Route::get('/vo-sinh-hiem-muon', function () {
  return view('user/page/erectile_dysfunction');
})->name('erectile-dysfunction');

Route::get('/man-duc-nam-gioi', function () {
  return view('user/page/menopause');
})->name('menopause');

Route::get('/benh-lay-qua-duong-tinh-duc', function () {
  return view('user/page/sexually_transmitted_diseases');
})->name('sexually_transmitted_diseases');

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

