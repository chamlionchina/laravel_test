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

get('login', 'SessionsController@create')->name('login');
post('login', 'SessionsController@store')->name('login');
delete('logout', 'SessionsController@destroy')->name('logout');
get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
get('password/email', 'Auth\PasswordController@getEmail')->name('password.reset');
post('password/email', 'Auth\PasswordController@postEmail')->name('password.reset');
get('password/reset/{token}', 'Auth\PasswordController@getReset')->name('password.edit');
post('password/reset', 'Auth\PasswordController@postReset')->name('password.update');
post('statuses', 'StatusesController@create')->name('statuses.create');
delete('statuses/{id}', 'StatusesController@destroy')->name('statuses.destroy');
get('statuses/{id}','StatusesController@show')->name('statuses.show');
get('statuses/{id}/edit','StatusesController@edit')->name('statuses.edit');
post('statuses/{id}','StatusesController@store')->name('statuses.store');
get('/users/{id}/status_edit','UsersController@status_edit')->name('users.status_edit');
get('/users/{id}/followings', 'UsersController@followings')->name('users.followings');
get('/users/{id}/followers', 'UsersController@followers')->name('users.followers');
post('/users/followers/{id}', 'FollowersController@store')->name('followers.store');
delete('/users/followers/{id}', 'FollowersController@destroy')->name('followers.destroy');





