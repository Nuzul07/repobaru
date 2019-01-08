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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/', 'HomeController@index');

Route::prefix('admin')->group(function(){
	Route::get('/', 'AdminController@index');
	Route::get('/kamar', 'AdminController@indexkamar');
	Route::get('/kamar/add', 'AdminController@addkamar');
	Route::post('/kamar/save', 'AdminController@savekamar');
	Route::get('/kamar/edit/{id}', 'AdminController@editkamar');
	Route::post('/kamar/update', 'AdminController@updatekamar');
	Route::get('/kamar/delete/{id}', 'AdminController@deletekamar');
	Route::get('/kamar/reportkamar', 'AdminController@reportkamar');
	Route::get('/jumlahkamar', 'AdminController@indexkamar');
	Route::get('/jumlahkamar/add', 'AdminController@addkamar');
	Route::post('/jumlahkamar/save', 'AdminController@savekamar');
	Route::get('/jumlahkamar/edit/{id}', 'AdminController@editkamar');
	Route::post('/jumlahkamar/update', 'AdminController@updatekamar');
	Route::get('/jumlahkamar/delete/{id}', 'AdminController@deletekamar');
});

Route::post('/save', 'PenginapController@save');
Route::get('/all', 'PenginapController@all');
Route::get('/edit/{id}', 'PenginapController@edit');
Route::post('/update/{id}', 'PenginapController@update');
Route::get('/delete/{id}', 'PenginapController@delete');
Route::get('/search', 'PenginapController@search');
Route::get('/user', 'PenginapController@index_user');