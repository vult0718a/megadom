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



Route::get('link',function(){

  Artisan::call('storage:link');
  echo"OK";

});



Route::get('clear-cache',function(){

  // Artisan::call('cache:clear');

  Artisan::call('route:cache');

  Artisan::call('config:cache');

  Artisan::call('view:cache');

  return "Cache is cleared";

});



Route::get('test-menu', function () {

  return view('user/page/test-menu');

})->name('test-menu');




Route::get('test', function () {

  return view('user/page/test');

})->name('test');



Route::get('/', function () {

  return view('user/page/home');

})->name('home');



Route::get('/gioi-thieu', function () {

  return view('user/page/introduce');

})->name('introduce');



Route::get('/doi-ngu-bac-si', function () {

  return view('user/page/doctor');

})->name('doctor');



// Route::get('/thu-vien', function () {

//   return view('user/page/library');

// })->name('library');

Route::get('/thu-vien', 'TestimonialController@getTestimonialForUser')->name('library');

Route::get('/hinh-anh-video-cam-nhan-chi-tiet', 'ImageGalleryController@getImageGalleryForUser')->name('picture_video');

// Route::get('/hinh-anh-video-cam-nhan-chi-tiet', function () {

//   return view('user/page/picture_video');

// })->name('picture_video');



// Route::get('/lien-he', function () {

//   return view('user/page/contact');

// })->name('lien_he');





Route::get('/lien-he', 'InfoController@viewIndex')->name('lien_he');

Route::post('/lien-he', 'ContactController@store')->name('admin.contact.store');



Route::get('/dang-ky-tu-van-thanh-cong', function () {

  return view('user/page/success');

})->name('success');



Route::get('/tin-tuc', 'PostController@getPostForUser')->name('post');
Route::get('/tin-tuc/{id}', 'PostController@getPostDetailForUser')->name('post.detail');

Route::get('/hoi-dap-chuyen-gia', 'ExpertController@getExpertForUser')->name('hoi-dap-chuyen-gia');
Route::get('/hoi-dap-chuyen-gia/{id}', 'ExpertController@getExpertDetailForUser')->name('expert.detail');

Route::get('/thong-tin-suc-khoe', 'HealthController@getHealthForUser')->name('thong-tin-suc-khoe');
Route::get('/thong-tin-suc-khoe/{id}', 'HealthController@getHealthDetailForUser')->name('health.detail');

Route::get('/cau-chuyen-khach-hang', 'StoryController@getStoryForUser')->name('cau-chuyen-khach-hang');
Route::get('/cau-chuyen-khach-hang/{id}', 'StoryController@getStoryDetailForUser')->name('story.detail');

Route::get('/bao-chi-noi-ve-megadom', 'NewspaperController@getNewspaperForUser')->name('newspaper');

Route::get('/hoat-dong-phong-kham', function () {

  return view('user/page/clinic_activities');

})->name('clinic_activities');

Route::get('/lam-to-megaderm', function () {

  return view('user/page/2-1');

})->name('2-1');

Route::get('/lam-to-silicone', function () {

  return view('user/page/2-2');

})->name('2-2');

Route::get('/phau-thuat-keo-dai', function () {

  return view('user/page/2-3');

})->name('2-3');

Route::get('/cat-bao-quy-dau', function () {

  return view('user/page/2-4');

})->name('2-4');

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

  return view('user/page/3-3');

})->name('3-3');

Route::get('/vo-sinh-hiem-muon', function () {

  return view('user/page/3-4');

})->name('3-4');

Route::get('/man-duc-nam-gioi', function () {

  return view('user/page/3-5');

})->name('3-5');

Route::get('/tuyen-tien-liet', function () {

  return view('user/page/3-7');

})->name('3-7');

Route::get('/benh-lay-qua-duong-tinh-duc', function () {

  return view('user/page/sexually_transmitted_diseases');

})->name('sexually_transmitted_diseases');



Route::group(['prefix'=>'admin'],function (){
  Auth::routes();
  Route::group(['middleware' => ['auth', 'checkstatus']],function () {
    Route::get('/', 'UserController@index')->name('admin');
    Route::get('/create', 'UserController@create')->name('admin.create');
    Route::post('/store', 'UserController@store')->name('admin.store');
    Route::get('/show/{id}', 'UserController@show')->name('admin.show');
    Route::post('/update/{id}', 'UserController@update')->name('admin.update');
    Route::post('/change-email', 'UserController@changeEmail')->name('admin.change-email');
    Route::post('/change-password', 'UserController@changePassword')->name('admin.change-password');
    Route::group(['prefix'=>'post'],function (){
      Route::get('/', 'PostController@index')->name('admin.post');
      Route::get('/create', 'PostController@create')->name('admin.post.create');
      Route::post('/store', 'PostController@store')->name('admin.post.store');
      Route::get('/show/{id}', 'PostController@show')->name('admin.post.show');
      Route::post('/update/{id}', 'PostController@update')->name('admin.post.update');
      Route::get('/delete/{id}', 'PostController@destroy')->name('admin.post.delete');
    });
    Route::group(['prefix'=>'newspaper'],function (){
      Route::get('/', 'NewspaperController@index')->name('admin.newspaper');
      Route::get('/create', 'NewspaperController@create')->name('admin.newspaper.create');
      Route::post('/store', 'NewspaperController@store')->name('admin.newspaper.store');
      Route::get('/show/{id}', 'NewspaperController@show')->name('admin.newspaper.show');
      Route::post('/update/{id}', 'NewspaperController@update')->name('admin.newspaper.update');
      Route::get('/delete/{id}', 'NewspaperController@destroy')->name('admin.newspaper.delete');
    });
    Route::group(['prefix'=>'contact'],function (){

      Route::get('/', 'ContactController@index')->name('admin.contact');

      Route::get('/show/{id}', 'ContactController@show')->name('admin.contact.show');

    });
    Route::group(['prefix'=>'info'],function (){

      Route::get('/', 'InfoController@index')->name('admin.info');

      Route::post('/store', 'InfoController@store')->name('admin.info.store');

    });
    Route::group(['prefix'=>'category'],function (){

      Route::get('/', 'CategoryController@index')->name('admin.category');

      Route::get('/create', 'CategoryController@create')->name('admin.category.create');

      Route::post('/store', 'CategoryController@store')->name('admin.category.store');

      Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');

      Route::post('/update/{id}', 'CategoryController@update')->name('admin.category.update');

      Route::get('/delete/{id}', 'CategoryController@destroy')->name('admin.category.delete');

    });
    // Route::group(['prefix'=>'expert'],function (){
    //   Route::get('/', 'ExpertController@index')->name('admin.expert');
    //   Route::get('/create', 'ExpertController@create')->name('admin.expert.create');
    //   Route::post('/store', 'ExpertController@store')->name('admin.expert.store');
    //   Route::get('/show/{id}', 'ExpertController@show')->name('admin.expert.show');
    //   Route::post('/update/{id}', 'ExpertController@update')->name('admin.expert.update');
    //   Route::get('/delete/{id}', 'ExpertController@destroy')->name('admin.expert.delete');
    // });
    // Route::group(['prefix'=>'health'],function (){
    //   Route::get('/', 'HealthController@index')->name('admin.health');
    //   Route::get('/create', 'HealthController@create')->name('admin.health.create');
    //   Route::post('/store', 'HealthController@store')->name('admin.health.store');
    //   Route::get('/show/{id}', 'HealthController@show')->name('admin.health.show');
    //   Route::post('/update/{id}', 'HealthController@update')->name('admin.health.update');
    //   Route::get('/delete/{id}', 'HealthController@destroy')->name('admin.health.delete');
    // });
    // Route::group(['prefix'=>'story'],function (){
    //   Route::get('/', 'StoryController@index')->name('admin.story');
    //   Route::get('/create', 'StoryController@create')->name('admin.story.create');
    //   Route::post('/store', 'StoryController@store')->name('admin.story.store');
    //   Route::get('/show/{id}', 'StoryController@show')->name('admin.story.show');
    //   Route::post('/update/{id}', 'StoryController@update')->name('admin.story.update');
    //   Route::get('/delete/{id}', 'StoryController@destroy')->name('admin.story.delete');
    // });
    Route::group(['prefix'=>'testimonial'],function (){
      Route::get('/', 'TestimonialController@index')->name('admin.testimonial');
      Route::get('/create', 'TestimonialController@create')->name('admin.testimonial.create');
      Route::post('/store', 'TestimonialController@store')->name('admin.testimonial.store');
      Route::get('/show/{id}', 'TestimonialController@show')->name('admin.testimonial.show');
      Route::post('/update/{id}', 'TestimonialController@update')->name('admin.testimonial.update');
      Route::get('/delete/{id}', 'TestimonialController@destroy')->name('admin.testimonial.delete');
    });
    Route::group(['prefix'=>'image_video'],function (){
      Route::get('/', 'ImageGalleryController@index')->name('admin.image_video');
      Route::get('/create', 'ImageGalleryController@create')->name('admin.image_video.create');
      Route::post('/store', 'ImageGalleryController@store')->name('admin.image_video.store');
      Route::get('/show/{id}', 'ImageGalleryController@show')->name('admin.image_video.show');
      Route::post('/update/{id}', 'ImageGalleryController@update')->name('admin.image_video.update');
      Route::get('/delete/{id}', 'ImageGalleryController@destroy')->name('admin.image_video.delete');
    });
  });

});



