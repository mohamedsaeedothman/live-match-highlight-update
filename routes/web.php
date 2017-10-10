<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    // route to show the login form
    Route::get('login', array('uses' => 'HomeController@showLogin','as' => 'login'));

    // route to process the form
    Route::post('login', array('uses' => 'HomeController@doLogin'));


    Route::group([
            'prefix'     => 'dashboard',
            // put middleware auth here to prevent anyone to access this routes if he does not  authenticated
            'middleware' => 'auth'
        ], function() {

        // route to go to dashboard
        Route::get('/', array('uses' => 'HomeController@index'));

        // route to logout user
        Route::get('logout', array('uses' => 'HomeController@logout'));

        // route resource to create read update delete moderators
        Route::resource('moderators', 'ModeratorsController', ['parameters'=>['moderators'=>'user']]);
        // use parameters param to use dependency injection to inject user model to controller





    });