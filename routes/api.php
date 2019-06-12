<?php

use Illuminate\Http\Request;

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

//Route::group(['middleware' => ['json.response']], function () {

    // public routes
    //Route::post('/login', 'Api\AuthController@login');
    //Route::post('/register', 'Api\AuthController@register');

    // private routes
    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('/user', function (Request $request) {
            return $request->user();
        });

        //Route::post('/logout', 'Api\AuthController@logout');

        Route::get('/projects', 'ProjectController@index');
        Route::post('/projects', 'ProjectController@store');
        Route::patch('/projects/{project}', 'ProjectController@update');
        Route::delete('/projects/{project}', 'ProjectController@destroy');

        Route::get('/students', 'StudentController@index');
        Route::post('/students', 'StudentController@store');
        Route::patch('/students/{student}', 'StudentController@update');
        Route::delete('/students/{student}', 'StudentController@destroy');

        Route::get('/judges', 'UserController@index');
        Route::post('/judges', 'UserController@store');
        Route::patch('/judges/{judge}', 'UserController@update');
        Route::delete('/judges/{judge}', 'UserController@destroy');
    });

//});