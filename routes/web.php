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

Route::get('/admin', function () {
    // Only verified users may enter...
})->middleware('verified');

Route::group(['middleware' => ['verified']], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile/update/{id}','ProfileController@update')->name("profile.update");
});


Route::get('/home', 'HomeController@index')->name('home');


