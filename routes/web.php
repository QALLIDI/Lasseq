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
  Route::get('/log','HomeController@getLog');
  Route::get('/Sign','HomeController@getSign');
  Route::resource("docs","DocsController");
});
