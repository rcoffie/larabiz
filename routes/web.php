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

/*
Route::get('/', function () {
    return view('welcome');
});

*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','listingsController@index');


Route::resource('/listings', 'ListingsController');


/*

*/

/*
Route::get('/listings/create', 'ListingsController@create');
Route::get('/listings', 'ListingsController@index');
Route::post('/listings','ListingsController@store');
Route::get('/listings/{listing}/edit','ListingsController@edit');
Route::PATCH('/listings/{listing}','ListingsController@update');
*/








