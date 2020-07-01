<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

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
  Route::post('/folders/store','FoldersController@store')->name('store');
  //files of a folder
  Route::get('/folders/{id}','FoldersController@show');

  //create new file
  Route::get('/files/create/{id}','FilesController@create');
  Route::post('/files/store','FilesController@store')->name('store');

  //show individual file
  Route::get('/files/{id}','FilesController@show');

  //search out side folders and files
  //Route::post('/home','SearchOutController@find');
});
