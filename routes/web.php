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
Route::get('/marketing', function() {
    return view('marketing');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/latest', 'PostController@list');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Auth::routes();

Route::put('profiles/{user}', 'ProfileController@update');
Route::get('profiles/{user}/edit', 'ProfileController@edit');

Route::get('/post/{id}', 'PostsController@show')->name('posts.show');
Route::resource('comments', 'CommentsController');
Route::post('/comments/{id}', 'CommentsController@store')->name('comments.store');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users','UserController@users');
Route::post('/toggle','UserController@toggle');

Route::post('/register', 'UserController@register');
Route::get('/profiles', function() {
    return redirect('/profiles/' . Auth::id());
});
Route::get('/profiles/{user}', 'ProfileController@show');

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');
Route::put('posts/{post}', 'PostController@update');
Route::get('posts/{post}/edit', 'PostController@edit');
Route::delete('posts/{post}', 'PostController@destroy');
Auth::routes();
 //Route::get('/posts/{post}/like', 'PostController@like');
Route::post('/posts/{post}/like', 'PostContoller@like');
Route::post('/posts/{post}/unlike', 'PostController@unlike');
Route::resource('/posts', 'PostController');
