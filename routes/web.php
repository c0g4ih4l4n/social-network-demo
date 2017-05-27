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

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{id?}', 'ProfileController@showProfile')->name('profile');

Route::group(['prefix' => '/member'], function () {
    Route::get('/', 'MemberController@list')->name('member');

    Route::get('/{id}/addfr', 'MemberController@addfr')->name('addfr');

    Route::get('/{id}/unf', 'MemberController@unf')->name('unf');

    Route::get('/{requestId}/accept', 'MemberController@accept')->name('acceptFreq');

    Route::get('/{requestId}/decline', 'MemberController@decline')->name('declineFreq');
});

Route::group(['prefix' => '/group'], function () {
	Route::get('/', 'GroupController@list')->name('groups');

	Route::get('/{id}/join', 'GroupController@join')->name('joinGroup');
	Route::get('/{id}/left', 'GroupController@left')->name('leftGroup');
	Route::get('/create', 'GroupController@create')->name('createGroup');
});

Route::get('/test', 'HomeController@test');
