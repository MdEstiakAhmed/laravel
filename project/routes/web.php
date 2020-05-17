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
	Route::get('/home/postManager/all', 'PostManagerControllers\PostManagerHomeController@all')->name('postManagerHome.all');
	Route::get('/home/postManager/allPost', 'PostManagerControllers\PostManagerHomeController@allPost')->name('postManagerHome.allPost');
	Route::get('/home/postManager/pendingPost', 'PostManagerControllers\PostManagerHomeController@pendingPost')->name('postManagerHome.pendingPost');
	Route::get('/home/postManager/UserList', 'PostManagerControllers\PostManagerHomeController@UserList')->name('postManagerHome.UserList');
	Route::get('/home/postManager/profileView/{user_id}', 'PostManagerControllers\PostManagerHomeController@profileView')->name('postManagerHome.profileView');
	Route::get('/home/postManager/createPost', 'PostManagerControllers\PostManagerHomeController@createPost')->name('postManagerHome.createPost');
	Route::post('/home/postManager/createPost', 'PostManagerControllers\PostManagerHomeController@publishPost')->name('postManagerHome.publishPost');
	Route::get('/home/postManager/notification/{user_id}', 'PostManagerControllers\PostManagerHomeController@notification')->name('postManagerHome.notification');
	Route::post('/home/postManager/notification/{user_id}', 'PostManagerControllers\PostManagerHomeController@notificationSend')->name('postManagerHome.notificationSend');
	Route::get('/home/postManager/report', 'PostManagerControllers\PostManagerHomeController@report')->name('postManagerHome.report');
	Route::get('/home/postManager/search', 'PostManagerControllers\PostManagerHomeController@search')->name('postManagerHome.search');

	Route::get('/home/postManager/postApprove/{post_id}', 'PostManagerControllers\PostStatusController@postApprove')->name('PostStatus.postApprove');
	Route::get('/home/postManager/posDelete/{post_id}', 'PostManagerControllers\PostStatusController@posDelete')->name('PostStatus.posDelete');
	Route::get('/home/postManager/postWarning/{post_id}', 'PostManagerControllers\PostStatusController@postWarning')->name('PostStatus.postWarning');
	Route::get('/home/postManager/postBlock/{post_id}', 'PostManagerControllers\PostStatusController@postBlock')->name('PostStatus.postBlock');

	Route::get('/home/postManager/userDetails/{user_id}', 'PostManagerControllers\userDetailsController@userInfo')->name('profileView.userInfo');
	Route::get('/home/postManager/profileEdit/{user_id}', 'PostManagerControllers\userDetailsController@profileEdit')->name('profileView.profileEdit');
	Route::post('/home/postManager/profileEdit/{user_id}', 'PostManagerControllers\userDetailsController@profileUpdate')->name('profileView.profileUpdate');

	Route::get('/home/postManager/allToday', 'PostManagerControllers\PostReportController@all')->name('postReport.all');
	Route::get('/home/postManager/allPostToday', 'PostManagerControllers\PostReportController@allPost')->name('postReport.allPost');
	Route::get('/home/postManager/pendingPostToday', 'PostManagerControllers\PostReportController@pendingPost')->name('postReport.pendingPost');

	Route::post('/home/postManager/ajaxSearch', 'PostManagerControllers\PostSearchController@ajaxSearch')->name('postSearch.ajaxSearch');
});

Route::group(['middleware'=>['sessionVerify']], function(){});