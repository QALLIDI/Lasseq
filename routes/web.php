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

Route::group(['middlewareGroups' => ['web']], function () {
  Route::get('/','IndexController@getIndex');
  Route::get('/archive','IndexController@getArchive');
  Route::get('/contact','IndexController@getContact');
  Route::resource("docs","DocsController");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
