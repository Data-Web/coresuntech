<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route for API
Route::group(['prefix' => 'api', 'namespace' => 'Api', 'middleware' => ['authorization.token', 'device']], function() {
    Route::post('login', 'AuthController@login');
    Route::post('refresh-access-token', 'TokensController@resfreshAccessToken');
    
    Route::group(['middleware' => ['access.token']], function() {   
        Route::post('logout', 'AuthController@logout');
        Route::resource('users', 'UsersController', ['except' => ['store']]);
    });
});

// Route for backend
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('login', 'AuthController@create');
    Route::post('login', 'AuthController@store');

    Route::group(['middleware' => ['admin']], function() {
        Route::get('/', 'DashboardController@index');
        Route::get('logout', 'AuthController@destroy'); 
        Route::resource('newscategory', 'NewsCategoryController');
    });
});
