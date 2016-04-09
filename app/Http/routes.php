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
Route::get('form', function(){
    return view('form');
});

Route::get('disp','UsersController@display');

Route::post('/auth/register','UsersController@store');

Route::get('delete/{id}','UsersController@destroy');

Route::post('update/{id}','UsersController@update');

Route::get('edit/{id}','UsersController@edit');

Route::resource('flyers','flyersController@create');