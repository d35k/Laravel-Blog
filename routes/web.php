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
Route::get('/', 'MainController@index');
//Herhangi bir Post'a istek
Route::get('/a/{articleUrl}', 'MainController@article');
//Gelen Post'a yorum
Route::post('/a/{articleUrl}/comment', 'CommentsController@post');
