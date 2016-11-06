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

Route::get('/', 'IndexController@index');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('profile', 'UserController@profile');

Route::get('testPost', function(){
    $csrf_token = csrf_token();
    return <<<ABCD
    <form action="/hello" method="post">
        <input type="hidden" name="_token" value="{$csrf_token}">
        <input type="submit" value="test">
    </from>
ABCD;
});

Route::post('hello', function() {
    return "hello laravel[POST]!";
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
Route::post('user/handleCreateArticle', 'UserController@handleCreateArticle');
Route::get('user/allArticle', 'UserController@allArticle');
Route::get('user/updateArticle/{id}', 'UserController@updateArticle');
Route::post('user/handleUpdateArticle', 'UserController@handleUpdateArticle');

//Route::get('learn/{name}', 'LearnController@show');
Route::get('learn/{name}/{id}', 'LearnController@show');
Route::get('show/{id}', 'ArticleController@show');

//category
Route::get('user/allCategory', 'UserController@allCategory');
Route::get('user/createCategory', 'UserController@createCategory');
Route::post('user/createCategory', 'UserController@handleCreateCategory');

//upload
Route::post('upload/images', 'UploadController@images');

Route::get('user/response', function(){
    //return (new \Illuminate\Http\Response('Hello World', 200))->header('Content-Type', 'text/html;charset=gb2312');
    return response('Hello Baby', 400)
        ->header('content-type', 'text/html;charset=gbk')
        ->withCookie('web-sites', 'www.phpnoob.com');
});

Route::get('user/download', function(){
    return response()->download(realpath(public_path('images').'/asp.png'), 'my.png');
});


//learn
Route::get('learn/{name}', 'LearnController@show');