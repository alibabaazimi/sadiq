<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1/admin'], function () {
    Route::get('/users', 'AdminController@getUsers');
    Route::get('/users/{user}', 'AdminController@getUser');
    Route::delete('/users/{user}', 'AdminController@deleteUser');
});


Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {
    Route::get('/user', function (Request $request) {
        return $request->user()->id;
    });
    Route::get('/auth/user', 'AuthController@getUser');
    Route::post('/logout', 'AuthController@logout');


    Route::get('/auth/user/posts', 'PostController@postsByMe');
    Route::post('/posts/{post}/comments', 'PostController@addComment');
    
    Route::post('/posts', 'PostController@store');
});


Route::group(['prefix' => 'v1'], function () {
    Route::get('/cities', function () {
        $cities = App\City::all();
        return $cities;
    });
    Route::get('/countries', function () {
        $countries = App\Country::all();
        return $countries;
    });
    Route::post('/register', 'AuthController@register')->middleware('guest:api');

    Route::get('/posts', 'PostController@index');
    Route::get('/posts/{post}', 'PostController@show');
    Route::get('/posts/{post}/comments', 'PostController@comments');

    Route::get('/categories', 'CategoryController@index');

    Route::post('/login', 'AuthController@login');
    Route::post('/register', 'AuthController@register');

    Route::get('/user/{user}/messages', 'UserController@index');

    Route::get('/user/{user}/posts', 'PostController@postsByUser');
});
