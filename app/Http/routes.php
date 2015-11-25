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

    //Admin SignIn
    Route::get('authentication', 'Auth\AuthController@getuserAuthenticate');
    Route::post('authentication', 'Auth\AuthController@postuserAuthenticate');

    //Add New User from Admin
    Route::get('add-new-user', 'Auth\AuthController@getaddUser');
    Route::post('add-new-user', 'Auth\AuthController@postaddUser');

    //Ambassdors Invites
    Route::get('invite-ambassdor', 'Admin\AdminController@getAmbassdorInvite');
    Route::post('invite-ambassdor', 'Admin\AdminController@postAmbassdorInvite');


    //Forget Password
    Route::match(['get', 'post'], 'forget-password', function () {
        return view('password.forget');
    });

    //Reset Admin Password
    Route::match(['get', 'post'], 'reset-password/{token}', function () {
        return view('password.reset');
    });


    //Add User
});

Route::group(['prefix' => 'ambassadors'], function () {


    Route::get('sign-up/{code}', 'Ambassdor\AmbassdorController@getregisterUser');
    Route::post('sign-up/{code}', 'Ambassdor\AmbassdorController@postregisterUser');





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
