<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|s
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// for Controller
//Route::get('/','PagesController@show');

//Route::get('/','PagesController@make_model');

Route::any('/layouts/post','PostController@post_model');

Route::post('/layouts/post/insert','PostController@insert');

Route::get('/layouts/comment/','PostController@select');

Route::get('/layouts/tag/','PostController@selectTag');

Route::post('/layouts/comment/insert','CommentController@insertComment');

Route::get('/layouts/update','PostController@update');

Route::any('/layouts/updateComments','PostController@updateComments');
//Route::get('/layouts/post','PostController@insert');