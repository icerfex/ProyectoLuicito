<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',function(){
	return view('welcome');
});
Route::resource('pharmacy','SocialNetwork\PharmacyController',['only'=>['show','edit']]);
Route::post('pharmacy/{id}','SocialNetwork\PharmacyController@update');
Route::get('pharmacy/delete/{id}','SocialNetwork\PharmacyController@destroy');

Route::get('pharmacy','SocialNetwork\PharmacyController@index');
Route::post('pharmacy','SocialNetwork\PharmacyController@store');

Route::get('category','SocialNetwork\CategoryController@index');
Route::post('category','SocialNetwork\CategoryController@store');

Route::get('product', 'SocialNetwork\ProductController@index');
Route::post('product','SocialNetwork\ProductController@store');




