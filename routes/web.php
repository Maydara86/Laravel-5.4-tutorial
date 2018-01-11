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

Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/post/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::post('/post/{post}/comment', 'CommentsController@store');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('about', function () {

    return view('about');

});

// Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/register', 'RegistrationController@show');

Route::post('/register', 'RegistrationController@store');

Route::get('login', 'SessionController@create');

Route::post('login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');