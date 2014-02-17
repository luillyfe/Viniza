<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('products/new', 'ProductController@newProduct');
Route::post('products', 'ProductController@create');
Route::get('products/index', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show');
Route::get('products/{id}/edit', 'ProductController@edit');
Route::put('products/{id}', array(	'as' 	=> 'products.update', 
								'uses' 	=> 'ProductController@update'));
Route::get('products/{id}/delete', 'ProductController@delete');