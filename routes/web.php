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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/addPost', 'PostController@getAddPost')->name('getAddPost');
Route::put('/post/addPost', 'PostController@putAddPost')->name('putAddPost');
Route::match(['get', 'post'],'/post/allPosts', 'PostController@getAllPosts')->name('getAllPosts');
// posr/{post}
Route::get('/home/addComment', 'CommentController@getAddComment')->name('getAddComment');
Route::put('/home/addComment', 'CommentController@putAddComment')->name('putAddComment');