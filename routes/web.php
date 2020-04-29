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

Route::get('/','PagesController@index');

// redirect to Folders page
Route::get('/folders/index','FoldersController@index');
//create new folder
Route::get('/folders/create','FoldersController@create');
Route::post('/folders/store','FoldersController@store');
//files of a folder
Route::get('/folders/{id}','FoldersController@show');
