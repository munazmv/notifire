<?php

Route::group(['prefix' => 'api'], function() {

	Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
	
	Route::post('authenticate', 'AuthenticateController@authenticate');

	Route::post('register', 'UserController@register');	

});


Route::group(['prefix' => 'channel', 'middleware' => 'jwt.auth'], function() {

	Route::post('create', 'ChannelController@store');

});

