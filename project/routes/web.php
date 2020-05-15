<?php

Route::get('/logout', 'GeneralControllers\LogoutController@index');

Route::get('/', 'GeneralControllers\LoginController@index');
Route::post('/', 'GeneralControllers\LoginController@verify');

Route::get('/register', 'GeneralControllers\RegisterController@Index')->name('Register.Index');
Route::post('/register', 'GeneralControllers\RegisterController@Register')->name('Register.Register');

Route::group(['middleware'=>['IdentityVerifier']], function(){
	
	Route::get('/home', 'GeneralControllers\GeneralHomeController@index')->name('home.index');

	//post manager routes
	Route::get('/home/postManager', 'PostManagerControllers\PostManagerHomeController@index')->name('postManagerHome.index');
	Route::get('/home/postManager/allPost', 'PostManagerControllers\PostManagerHomeController@allPost')->name('postManagerHome.allPost');
	Route::get('/home/postManager/pendingPost', 'PostManagerControllers\PostManagerHomeController@pendingPost')->name('postManagerHome.pendingPost');
	Route::get('/home/postManager/postApprove/{post_id}', 'PostManagerControllers\PostStatusController@postApprove')->name('PostStatus.postApprove');
	Route::get('/home/postManager/posDelete/{post_id}', 'PostManagerControllers\PostStatusController@posDelete')->name('PostStatus.posDelete');
});

Route::group(['middleware'=>['sessionVerify']], function(){});