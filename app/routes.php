<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('auth/logout/{key?}','AuthController@logout');
Route::get('auth/login','AuthController@login');
Route::resource('auth','AuthController');

Route::resource('feed','FeedController');

Route::resource('comment','CommentController');

Route::resource('like','LikeController');


Route::get('testmongo',function(){
    $feed = Media::get()->toArray();
    print_r($feed);
});