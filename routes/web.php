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

Route::get('/', 'UrlController@index');
Route::post('urls/create', 'UrlController@create')->name('urls.create');
Route::get('urls/show', 'UrlController@show')->name('urls.show');
Route::get('/{url}', 'UrlController@visit');
