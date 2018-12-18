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



Route::get('/', function () {
    return view('welcome');
});

#Only Logged in user have access to these routes
Route::group(['middleware' => 'auth'], function () {
    #CREATE
    Route::get('/user-profile/create', 'CalendarController@addEvent');
    Route::post('/user-profile', 'CalendarController@store');

#READ
    Route::get('/user-profile/', 'CalendarController@index');
    Route::get('/user-profile/{id}', 'CalendarController@showEvent');
});

#UPDATE
Route::get('/user-profile/{id}/edit', 'CalendarController@edit');
Route::put('/user-profile/{id}', 'CalendarController@update');

#TEST
Route::any('/practice/{n?}', 'GettingStartedController@index');


#Authentication
Auth::routes();

Route::get('/show-login-status', function () {
    $user = Auth::user();

    if ($user) {
        dump('You are logged in.', $user->toArray());
    } else {
        dump('You are not logged in.');
    }

    return;
});
