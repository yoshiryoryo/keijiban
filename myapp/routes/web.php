<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('posts', 'postController', ['only' => ['index','show', 'create', 'store']]);
Route::get('posts/edit/{id}', 'PostController@edit');
Route::post('posts/edit', 'postController@update');
Route::post('posts/delete/{id}', 'postController@destroy');