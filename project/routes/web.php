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
Route::get('/logout', 'GeneralControllers\LogoutController@index');

Route::get('/', 'GeneralControllers\LoginController@index');
Route::post('/', 'GeneralControllers\LoginController@verify');

Route::get('/home', 'GeneralControllers\GeneralHomeController@index')->name('home.index');

Route::get('/home/postManager', 'PostManagerControllers\PostManagerHomeController@index')->name('postManagerHome.index');
