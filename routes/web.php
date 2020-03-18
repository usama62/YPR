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
    return view('index');
});

Auth::routes(['verify' => true]);

Route::get('/admin123', function () {
    return view('auth.admin_login');
});

Route::group(['middleware' => ['verified']], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/users', 'AdminController@users');
    Route::get('/photos', 'AdminController@photos');
    Route::get('/upload-photos', 'AdminController@upload_photos');
    Route::get('/videos', 'AdminController@videos');
    Route::get('/upload-videos', 'AdminController@upload_videos');
    Route::get('/saved-items', 'AdminController@savedItems');
    Route::get('/create-users', 'AdminController@create_users');


    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile/update/{id}','ProfileController@update')->name("profile.update");
});


Route::get('/home', 'HomeController@index')->name('home');


