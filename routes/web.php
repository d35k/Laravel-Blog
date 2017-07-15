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
//Ana Sayfa
Route::get('/', 'MainController@index')->name('index');
Route::get('/allPosts', 'MainController@allPosts')->name('allPost');
//Herhangi bir Post'a istek
Route::get('/a/{articleUrl}', 'MainController@article');
//Gelen Post'a yorum
Route::post('/a/{articleUrl}/comment', 'CommentsController@post');


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//Yeni Post Ekleme
Route::get('/new/post', 'NewPostController@form')->name('addNewPost');
Route::post('/new/post', 'NewPostController@store')->name('saveNewPost');


Route::get('/home', 'HomeController@index')->name('home');
