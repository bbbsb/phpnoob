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

Route::get( 'auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('profile', 'UserController@profile');



Route::get('/testPost', function(){
    $csrf_token = csrf_token();
    return <<<ABCD
    <form action="/hello" method="post">
        <input type="hidden" name="_token" value="{$csrf_token}">
        <input type="submit" value="test">
    </from>
ABCD;
});

Route::post('/hello', function(){
    return "hello laravel[POST]!";
});




