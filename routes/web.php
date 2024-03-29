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
Route::get('/post/showPost/{post}', 'PostController@showPost')->name('showPost');
Route::get('/post/allPosts/{user}', 'PostController@getUserPosts')->name('getUserPosts');

// posr/{post}
Route::get('/home/addComment', 'CommentController@getAddComment')->name('getAddComment');
Route::put('/post/showPost', 'CommentController@putAddComment')->name('putAddComment');



