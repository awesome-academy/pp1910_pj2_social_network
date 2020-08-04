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
Route::get('/settings', 'UserController@getProfile')->name('user.getProfile');
Route::post('/settings/update', 'UserController@updateProfile')->name('user.updateProfile');
Route::get('/settings/password', 'UserController@getChangePassword')->name('user.getChangePassword');
Route::post('/settings/password/update', 'UserController@changePassword')->name('user.changePassword');
Route::get('/{username}', 'ProfileController@showProfile')->name('user.profile');
