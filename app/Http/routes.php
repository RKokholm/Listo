<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

Route::get('login', ['as' => 'login_path', 'uses' => 'AuthController@create']);
Route::post('login', ['as' => 'login_path', 'uses' => 'AuthController@store']);

Route::get('logout', ['as' => 'logout_path', 'uses' => 'AuthController@logout']);

Route::get('register', ['as' => 'register_path', 'uses' => 'UsersController@create']);
Route::post('register', ['as' => 'register_path', 'uses' => 'UsersController@store']);

Route::get('/{profile}', ['as' => 'profile_path', 'uses' => 'ProfilesController@show']);