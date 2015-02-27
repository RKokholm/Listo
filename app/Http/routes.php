<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

Route::get('login', ['as' => 'login_path', 'uses' => 'AuthController@create']);
Route::post('login', ['as' => 'login_path', 'uses' => 'AuthController@store']);

Route::get('register', ['as' => 'register_path', 'uses' => 'UsersController@create']);
Route::post('register', ['as' => 'register_path', 'uses' => 'UsersController@store']);