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

    // route to get all matches index our website
    Route::get('/', array('uses' => 'FrontendController@index'));

Route::get('/newcommemnt', function(){

    $comment=new \App\Comment();
    $comment->match_id=1;
    $comment->type=1;
    $comment->content="iohqoefhqwoifhqwiofhqwiofhqwiofhqwiofhqwiofhqwoifhqwoifhqwfio";
    $comment->save();

    $data = [
        'event' => 'InsertNewComment'.$comment->match_id,
        'data' => [
            'match_id' => $comment->match_id,
            'type' => \App\Services\MatchTypes::getType($comment->type),
            'created_at' =>$comment->created_at->toDateTimeString() ,
            'content' => $comment->content,
            'username' => 'saeed'
        ]
    ];
    Redis::publish('test-channel', json_encode($data));
});
    // route to show  match comments and details
    Route::get('/matches/{match_id}', array('uses' => 'FrontendController@show'));


    Route::group([
            'prefix'     => 'dashboard',
            // put middleware auth here to prevent anyone to access this routes if he does not  authenticated
            'middleware' => 'auth'
        ], function() {

        // route to go to dashboard
        Route::get('/', array('uses' => 'HomeController@index'));

        // route to logout user
        Route::get('logout', array('uses' => 'HomeController@logout'));
        // routes that admin can access
        Route::group([
            // put middleware admin here to prevent anyone to access this routes if he does not  authenticated
            'middleware' => 'admin'
        ],function(){
            // route resource to create read update delete moderators
            Route::resource('moderators', 'ModeratorsController', ['parameters'=>['moderators'=>'user']]);
            // use parameters param to use dependency injection to inject user model to controller

        });

        // route resource to create  update delete teams
        Route::resource('teams', 'TeamsController', ['parameters'=>['teams'=>'team']]);
        // use parameters param to use dependency injection to inject team model to controller

        // route resource to create read update delete match
        Route::resource('matches', 'MatchesController', ['parameters'=>['matches'=>'match']]);
        // use parameters param to use dependency injection to inject match model to controller

        // route to start session for match
        Route::get('start-session/{match_id}', 'MatchesController@startSession');

        // route to end session for match
        Route::get('end-session/{match_id}', 'MatchesController@endSession');

        // route to add comment for match
        Route::post('comments', 'CommentsController@addComment');


    });

    //error 401 message route
    Route::get('errors/401', array('uses' => 'ErrorsController@get401'));
    //error 404 message route
    Route::get('errors/404', array('uses' => 'ErrorsController@get404'));
