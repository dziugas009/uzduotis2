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
//Pagrindinis
Route::get('/', 'PagesController@getMain');
//Vienas CV
Route::get('show', 'PagesController@getSingle');

//Naujas CV
Route::get('create', 'PagesController@getNew');

//Db
Route::resource('posts', 'PostController');