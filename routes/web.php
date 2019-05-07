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

//Route::get('/', function () {
//    return view('auth/login');
//});

Route::get('', function () {
    if(Auth::check())
        return view('home');
    else
        return view('auth/login');
});

Auth::routes();

Route::get('', 'HomeController@index')->name('home');

//Route::resource('implementation', 'ImplementationController');
//Route::resource('student', 'StudentController');
//Route::resource('user', 'UserController');
//Route::resource('jiri', 'JiriController');
//Route::resource('impression', 'ImpressionController');
//Route::resource('project', 'ProjectController');
//Route::resource('score', 'ScoreController');
//Route::resource('performance', 'PerformanceController');
//Route::resource('person', 'PersonController');


Route::group(['middleware' => 'auth'], function () {
    Route::get('{any}', function () {
        return view('home');
    })->where('any','.*');
});