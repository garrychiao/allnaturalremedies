<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'HomeController@index');

Route::get('/errors/{type}', 'ErrorController@index');

Auth::routes();

Route::group(['middleware' => ['web','permission']], function () {

  Route::get('/home', 'HomeController@home');

  Route::post('/user/permission', 'HomeController@permissionUser');

  Route::post('/user/delete', 'HomeController@deleteUser');

  Route::post('/user/update', 'HomeController@updateUser');

  Route::post('/booking', 'HomeController@booking');

});
