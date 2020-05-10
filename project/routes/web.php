<?php

Route::get('/logout', 'GeneralControllers\LogoutController@index');

Route::get('/', 'GeneralControllers\LoginController@index');
Route::post('/', 'GeneralControllers\LoginController@verify');

Route::group(['middleware'=>['IdentityVerifier']], function(){
	
	Route::get('/home', 'GeneralControllers\GeneralHomeController@index')->name('home.index');

	Route::get('/home/postManager', 'PostManagerControllers\PostManagerHomeController@index')->name('postManagerHome.index');
});