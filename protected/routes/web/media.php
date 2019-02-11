<?php

Route::group(['prefix' => 'administrator/media','middleware' => 'auth'], function () {
	Route::get('/',[
		'as'=>'administrator.media.list',
		'uses'=>'MediaController@getView']);
	Route::post('/upload',[
		'as'=>'administrator.media.UploadPost',
		'uses'=>'MediaController@getUploadPost']);
	Route::get('/ajax/{newValue}',[
		'as'=>'administrator.media.ajax',
		'uses'=>'MediaController@getAjaxAll']);
});