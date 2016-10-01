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

Route::get('/user/{name?}', function($name = 'default'){
    return 'Hello '.$name;
});

Route::get('test1', ['as' => 't',function(){
    return 'test1';
}]);

Route::get('/nickname', function(){
    return redirect()->route('t');
});

Route::get('/testPost', function(){
    $csrf_token = csrf_token();
    return <<<ABCD
    <form action="/hello" method="post">
        <input type="hidden" name="_token" value="{$csrf_token}">
        <input type="submit" value="test">
    </from>
ABCD;
});
Route::get('/hello/{name?}',function($name = '123'){
    return "Hello {$name}!";
})->where('name', '[a-z]+'); //default value has no effective

Route::resource('post', 'PostController');

Route::controller('request', 'RequestController');

Route::get('fileUpload', 'FileController@index');
Route::post('fileUpload', 'FileController@upload');





