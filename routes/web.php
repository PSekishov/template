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

Auth::routes();

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){
  Route::get('/','AdminController@index');
});


Route::get('/', 'HomeController@index')->name('home');
Route::get('/about','AboutController@about')->name('about');
Route::get('/contact','ContactController@contact')->name('contact');

