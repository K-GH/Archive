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
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');

Auth::routes();

//after login
Route::get('/home', 'HomeController@index')->name('home');

// redirect to Folders page
Route::get('/folders/index','FoldersController@index');
//create new folder
Route::get('/folders/create','FoldersController@create');
Route::post('/folders/store','FoldersController@store');
//files of a folder
Route::get('/folders/{id}','FoldersController@show');

//create new file
Route::get('/files/create/{id}','FilesController@create');
Route::post('/files/store','FilesController@store');

//show individual file
Route::get('/files/{id}','FilesController@show');
