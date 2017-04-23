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

Route::get('/', 'JsonController@index');
Route::get('/{json}.json', 'JsonController@serve')->name('json.serve');
Route::get('/{json}', 'JsonController@edit')->name('json.edit');
Route::post('/{json}', 'JsonController@update')->name('json.update');