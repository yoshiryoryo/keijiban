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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', 'postController@index');
Route::get('/posts/{id}', 'postController@show');
Route::get('/post/create', 'postController@create');
Route::post('/posts', 'postController@store');
Route::get('/posts/{id}', 'postController@edit');
Route::put('/posts/{id}', 'postController@update');
Route::delete('/posts/{id}', 'postController@destroy');
