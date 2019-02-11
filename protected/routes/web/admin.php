<?php

Route::group(['prefix' => 'administrator','middleware' => 'auth'], function () {
	Route::get('/',[
		'as'=>'administrator.list',
		'uses'=>'AdminController@getView']);
});