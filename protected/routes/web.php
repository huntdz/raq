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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layanan-kami','FrontController@getLayanan');
Route::get('/gallery','FrontController@getGallery');
Route::get('/investasi','FrontController@getInvestasi');

Route::get('404',function(){
	return view('errors.404');
});

Route::get('keluar','Auth\LoginController@logout');
Auth::routes();



