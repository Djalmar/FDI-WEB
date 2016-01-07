<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::get('/organization', function () {
    return view('statics.organization');
});

Route::get('/contactUs', function () {
    return view('statics.contacts');
});

Route::get('/structure', function () {
    return view('statics.structure');
});

Route::model('images','App\Picture');
Route::model('news','App\Notice');
Route::model('events','App\Event');

Route::resource('images','ImagesController');
Route::resource('news','NewsController');
Route::resource('events','EventsController');

Route::get('/searches','SearchesController@search');