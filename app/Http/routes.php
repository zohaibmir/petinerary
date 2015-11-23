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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('login', function () {
        return view('admin.login.login');
    });

    
    //Login Route for Admin
    Route::get('authentication', 'Auth\AuthController@getuserAuthenticate');    
    Route::post('authentication', 'Auth\AuthController@postuserAuthenticate');
    
    


    Route::match(['get', 'post'], 'forget-password', function () {
        return view('password.forget');
    });


    Route::match(['get', 'post'], 'reset-password/{token}', function () {
        return view('password.reset');
    });
});

Route::group(['prefix' => 'ambassadors'], function () {

    Route::match(['get', 'post'], 'login', function () {
        return view('ambassdor.auth.login');
    });

    Route::match(['get', 'post'], 'forget-password', function () {
        return view('password.forget');
    });


    Route::match(['get', 'post'], 'reset-password/{token}', function () {
        return view('password.reset');
    });
});
