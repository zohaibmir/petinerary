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
    Route::get('login', 'Auth\AuthController@getuserAuthenticate');
    Route::post('login', 'Auth\AuthController@postuserAuthenticate');

    //Ambassdor DashBoard
    Route::get('dashboard', 'Admin\AdminController@getDashboard');

    //Add New User from Admin
    Route::get('add-new-user', 'Admin\AdminController@getaddUser');
    Route::post('add-new-user', 'Admin\AdminController@postaddUser');

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


    //Ambassdor SignUp
    Route::get('sign-up/{code}', 'Ambassdor\AmbassdorController@getregisterUser');
    Route::post('sign-up/{code}', 'Ambassdor\AmbassdorController@postregisterUser');

    //Ambassdor Login
    Route::get('login', 'Ambassdor\AmbassdorController@getuserAuthenticate');
    Route::post('login', 'Ambassdor\AmbassdorController@postuserAuthenticate');

    //Ambassdor DashBoard
    Route::get('dashboard', 'Ambassdor\AmbassdorController@getDashboard');


    //Ambassdor Add Review
    Route::get('ambassdor-login', 'Ambassdor\AmbassdorController@getuserAuthenticate');
    Route::post('ambassdor-login', 'Ambassdor\AmbassdorController@postuserAuthenticate');



    //Ambassdor Forget Password


    Route::match(['get', 'post'], 'forget-password', function () {
        return view('password.forget');
    });

    //Reset Password
    Route::match(['get', 'post'], 'reset-password/{token}', function () {
        return view('password.reset');
    });
});
