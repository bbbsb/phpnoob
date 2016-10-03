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

//login && logout
Route::get('user/login', 'Auth\AuthController@getLogin');
Route::post('user/login', 'Auth\AuthController@postLogin');
Route::get('user/logout', 'Auth\AuthController@getLogout');

//register
Route::get('user/register', 'Auth\AuthController@getRegister');
Route::post('user/register', 'Auth\AuthController@postRegister');

//home page
Route::get('user', 'UserController@index');
Route::get('user/index', 'UserController@index');

Route::get('user/createArticle', 'UserController@createArticle');
Route::post('user/createArticle', 'UserController@handleCreateArticle');





Route::get('user/response', function(){
    //return (new \Illuminate\Http\Response('Hello World', 200))->header('Content-Type', 'text/html;charset=gb2312');
    return response('Hello Baby', 400)
        ->header('content-type', 'text/html;charset=gbk')
        ->withCookie('web-sites', 'www.phpnoob.com');
});

Route::get('user/download', function(){
    return response()->download(realpath(public_path('images').'/asp.png'), 'my.png');
});

Route::get('user/test', 'UserController@test');
Route::get('user/tt', 'UserController@lara');





