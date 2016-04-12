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

Route::get('/', function () {
    return view('page');
});



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');




Route::get('form', function () {
    return view('form');
});

Route::get('disp', 'UsersController@display');

//Route::post('/auth/register', 'UsersController@store');

Route::get('delete/{id}', 'UsersController@destroy');

Route::post('update/{id}', 'UsersController@update');

Route::get('edit/{id}', 'UsersController@edit');
/*..Project Flyers..*/


Route::get('flyers', 'flyersController@create');

Route::post('flyers1', 'flyersController@store');

Route::get('{zip}/{street}', 'flyersController@show');

Route::post('{zip}/{street}/photos', 'flyersController@addPhoto');

