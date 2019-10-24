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

/***** авторизация *****/

Auth::routes();


/***** admin pages *****/

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){
  Route::get('/','AdminController@index');
  Route::resource('/profession','ProfessionController');
  Route::resource('/doctor','DoctorController');
});

/***** page cabinet *****/

Route::get('/cabinet','CabinetController@cabinet')->name('cabinet');
Route::get('/mydoctor','CabinetController@mydoctor')->name('mydoctor');
Route::get('/aboutme','CabinetController@aboutme')->name('aboutme');

/***** pages *****/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about','AboutController@about')->name('about');
Route::get('/contact','ContactController@contact')->name('contact');

