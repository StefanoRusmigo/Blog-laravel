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
use App\Task;
Route::get('/','PostsController@index')->name('home');
Route::get('/posts','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}','PostsController@show');

Route::post('/posts/{post}/comments','CommentsController@store');



Route::get('/tasks', 'TasksConstroller@index');
Route::get('/task/{task}', 'TasksConstroller@show');

Route::get('/login',  'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/register', 'RegistrationsController@create');
Route::post('/register', 'RegistrationsController@store');

Route::get('/posts/tag/{tag}', 'TagsController@index');



	