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
	
	//ACM Routes
	Route::get('/home/AccountManager', 'AccountManagerControllers\AcmHomeController@Index')->name('AcmHome.Index');
	Route::get('/AccountManager/Profile', 'AccountManagerControllers\AcmProfileController@Index')->name('AcmProfile.Index');
	Route::post('/AccountManager/Profile', 'AccountManagerControllers\AcmProfileController@Update')->name('AcmProfile.Update');
	Route::get('/AccountManager/Timeline', 'AccountManagerControllers\AcmProfileController@Timeline')->name('AcmProfile.Timeline');
	Route::post('/AccountManager/Profile/Post', 'AccountManagerControllers\AcmProfileController@Statuspost')->name('AcmProfile.Statuspost');
	
	Route::post('/AccountManager/MessagePost', 'AccountManagerControllers\AcmHomeController@MessagePost')->name('AcmHome.MessagePost');
	Route::get('/deleteMessage/{msgID}', 'AccountManagerControllers\AcmHomeController@MessageDelete')->name('AcmHome.MessageDelete');
	
	Route::get('/AccountManager/UserProfile/{id}', 'AccountManagerControllers\UserProfileController@Index')->name('UserProfile.Index');
	Route::get('/AccountManager/UserProfile/{id}/Activate', 'AccountManagerControllers\UserProfileController@Activate')->name('UserProfile.Activate');
	Route::get('/AccountManager/UserProfile/{id}/Deactivate', 'AccountManagerControllers\UserProfileController@Deactivate')->name('UserProfile.Deactivate');

	Route::get('/AccountManager/Report/{searchBy}', 'AccountManagerControllers\AcmReportController@Index')->name('AcmReport.Index');
	Route::get('/AccountManager/Report/Download/{searchBy}', 'AccountManagerControllers\AcmReportController@Download')->name('AcmReport.Download');	
	Route::get('/AccountManager/StatisticalReport/{searchBy}', 'AccountManagerControllers\AcmStatisticalReportController@Index')->name('AcmStatistical.Index');
	Route::post('/searchTxt', 'AccountManagerControllers\AcmReportController@AdvSearch')->name('AcmReport.AdvSearch');
	
	Route::get('/AccountManager/UserPosts/{mon}', 'AccountManagerControllers\UserPostController@Index')->name('UserPost.Index');

	Route::get('/Block/{id}', 'AccountManagerControllers\AcmHomeController@Block')->name('AcmHome.Block');
	Route::get('/Unblock/{id}', 'AccountManagerControllers\AcmHomeController@Unblock')->name('AcmHome.Unblock');

	//************* User Routes *****************//

	//home
	Route::get('/user/home', 'UserControllers\UserHomeController@index')->name('userHome.index');
	
	//upload
	Route::get('/user/upload', 'UserControllers\UserUploadController@index')->name('upload.index');
	Route::post('/user/upload', 'UserControllers\UserUploadController@post')->name('upload.post');
	
	//ajax post
	Route::post('/user/ajax/post_details', 'UserControllers\UserPostController@ajaxPost')->name('post.ajaxPost');
	Route::get('/user/ajax/post_details', 'UserControllers\UserPostController@ajaxPost')->name('post.ajaxPost');

	//ajax comments
	Route::post('/user/ajax/post_details/comments', 'UserControllers\UserPostController@ajaxComment')->name('post.ajaxComment');
	
	//ajax likes
	Route::post('/user/ajax/post_details/likes', 'UserControllers\UserPostController@ajaxLike')->name('post.ajaxLike');
	Route::get('/user/ajax/post_details/likes', 'UserControllers\UserPostController@ajaxLike')->name('post.ajaxLike');
	
	//profile
	Route::get('/user/{username}', 'UserControllers\UserProfileController@index')->name('profile.index');
	
	//settings
	Route::get('/user/{username}/settings', 'UserControllers\UserSettingsController@index')->name('settings.index');
	Route::post('/user/{username}/settings', 'UserControllers\UserSettingsController@update')->name('settings.update');
	
});

Route::group(['middleware'=>['sessionVerify']], function(){});