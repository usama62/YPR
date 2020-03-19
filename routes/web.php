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

    // Photos
    Route::get('/photos', 'PhotosController@index');
    Route::get('/upload-photos', 'PhotosController@create');
    Route::get('/update-photos/{id}', 'PhotosController@edit')->name("photo.edit");;
    Route::post('/photos/upload','PhotosController@store')->name("photos.store");
    Route::get('/photo/delete/{id}', 'PhotosController@destroy')->name("photo.delete");
    Route::post('/photo/update/{id}', 'PhotosController@update')->name("photo.update");

    // Videos
    Route::get('/videos', 'VideosController@index');
    Route::get('/upload-videos', 'VideosController@create');
    Route::post('/videos/upload','VideosController@store')->name("videos.store");
    Route::get('/video/delete/{id}', 'VideosController@destroy')->name("videos.delete");

    // Saved Items
    Route::get('/saved-items', 'SaveditemsController@index');

    // Users
    Route::get('/create-users', 'AdminController@create_users');


    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile/update/{id}','ProfileController@update')->name("profile.update");
});


Route::get('/home', 'HomeController@index')->name('home');


