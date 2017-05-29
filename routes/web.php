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

Route::get('/profile/edit', 'ProfileController@editProfile')->name('editProfile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('updateProfile');
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
	Route::get('/{id}/leave', 'GroupController@leave')->name('leaveGroup');
	Route::get('/create', 'GroupController@viewCreateGroup')->name('createGroup');
    Route::post('/create', 'GroupController@create')->name('postCreateGroup');
});

Route::group(['prefix' => '/wall'], function () {
    Route::get('{wall_id}', 'WallController@showWall')->name('showWall');

});

Route::resource('comment', 'CommentController');

Route::resource('post', 'PostController');

Route::get('/test', 'HomeController@test');
