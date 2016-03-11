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

//Route::ressource('/articles','ArticleController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });


    Route::get('/home', 'HomeController@index');

    Route::resource('/articles', 'PostController');

    Route::get('/profile', ['middleware' => 'auth', 'as' => 'profile.show', 'uses' => 'ProfileController@show']);
    Route::get('/profile/edit', ['middleware' => 'auth', 'as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('/profile', ['middleware' => 'auth', 'as' => 'profile.update', 'uses' => 'ProfileController@update']);


});
