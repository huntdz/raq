<?php

Route::group(['prefix' => 'administrator/post-berita','middleware' => 'auth'], function () {
	Route::get('/',[
		'as'=>'administrator.post-berita.list',
		'uses'=>'PostBeritaController@getView']);
	Route::get('/create',[
		'as'=>'administrator.post-berita.create',
		'uses'=>'PostBeritaController@getCreate']);
	Route::post('/create',[
		'as'=>'administrator.post-berita.create',
		'uses'=>'PostBeritaController@getPost']);
	Route::get('/edit/{id}',[
		'as'=>'administrator.post-berita.edit',
		'uses'=>'PostBeritaController@getEdit']);
	Route::post('/edit/{id}',[
		'as'=>'administrator.post-berita.edit',
		'uses'=>'PostBeritaController@PostEdit']);
	Route::delete('/hapus/{id}',[
		'as'=>'administrator.post-berita.hapus',
		'uses'=>'PostBeritaController@getDelete']);
    Route::delete('/hapusall/{id}',[
		'as'=>'administrator.post-berita.hapusall',
		'uses'=>'PostBeritaController@getDeleteAny']);
	Route::get('/activeall/{id}',[
		'as'=>'administrator.post-berita.activeall',
		'uses'=>'PostBeritaController@getActiveAll']);
	Route::get('/deactiveall/{id}',[
		'as'=>'administrator.post-berita.deactiveall',
		'uses'=>'PostBeritaController@getDeactiveAll']);


});