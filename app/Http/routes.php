<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|Route::get('/', function () {
    return view('welcome');
});
*/
get('/test', 'StaticPagesController@test')->name('test');
get('/', 'StaticPagesController@home')->name('home');
get('/help', 'StaticPagesController@help')->name('help');
get('/about', 'StaticPagesController@about')->name('about');
get('signup', 'UsersController@create')->name('signup');
resource('users', 'UsersController');