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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('posts', 'PostController');
Route::get('/setting', 'UserController@getProfile')->name('user.getProfile');
Route::post('/setting/update', 'UserController@updateProfile')->name('user.updateProfile');
