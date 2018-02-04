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
  Route::get('/','HomeController@getIndex');
  Route::get('/archive','HomeController@getArchive');
  Route::get('/join','HomeController@getJoin');
  Route::get('/contact','HomeController@getContact');
  Route::get('/log','HomeController@getLog');
  Route::resource("docs","DocsController");
});
