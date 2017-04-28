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
	return view('index');
});

Route::post('/language', ['Middleware' => 'languageSwitcher', 'uses'=>'Languages@index']);

Route::resource('/categories', 'Categories');

Route::resource('/products', 'Products');
