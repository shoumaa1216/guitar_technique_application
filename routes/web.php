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
Route::get('/', 'TechniqueController@index');
Route::post('/result', 'OnomatopoeiaController@result');
Route::get('/registers', 'TechniqueController@registers');
Route::get('/registers/{technique}', 'TechniqueController@post');
Route::post('/posts', 'OnomatopoeiaController@store');
Route::get('/list', 'TechniqueController@list');
Route::get('/list/{technique}', 'OnomatopoeiaController@detail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
