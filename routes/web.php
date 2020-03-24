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

    // Photos
    Route::get('/photos', 'PhotosController@index');
    Route::get('/upload-photos', 'PhotosController@create');
    Route::get('/update-photos/{id}', 'PhotosController@edit')->name("photo.edit");
    Route::post('/photos/upload','PhotosController@store')->name("photos.store");
    Route::get('/photo/delete/{id}', 'PhotosController@destroy')->name("photo.delete");
    Route::post('/photo/update/{id}', 'PhotosController@update')->name("photo.update");

    // Videos
    Route::get('/videos', 'VideosController@index');
    Route::get('/upload-videos', 'VideosController@create');
    Route::get('/update-videos/{id}', 'VideosController@edit')->name("videos.edit");
    Route::post('/videos/upload','VideosController@store')->name("videos.store");
    Route::post('/video/update/{id}', 'VideosController@update')->name("videos.update");
    Route::get('/video/delete/{id}', 'VideosController@destroy')->name("videos.delete");

    // Category
    Route::get('/create-category', 'CategoryController@create');
    Route::get('/category', 'CategoryController@show');
    Route::post('/category/create','CategoryController@store')->name("category.store");
    Route::get('/category/delete/{id}', 'CategoryController@destroy')->name("category.delete");

    // Article
    Route::get('/create-article', 'ArticleController@create');
    Route::get('/article', 'ArticleController@show');
    Route::post('/article/create','ArticleController@store')->name("article.store");
    Route::get('/article/delete/{id}', 'ArticleController@destroy')->name("article.delete");

    // Saved Items
    Route::get('/saveditems', 'SaveditemsController@index');

    // admin
    Route::get('/admin', 'AdminController@index');
    Route::get('/manage-users', 'AdminController@users');
    Route::get('/create-users', 'AdminController@create');
    Route::post('/store-user','AdminController@store')->name("store.user");
    Route::get('/user-edit/{id}','AdminController@edit')->name("user.edit");
    Route::post('/user-update/{id}', 'AdminController@update')->name("user.update");
    Route::get('/user-delete/{id}', 'AdminController@destroy')->name("user.delete");


    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile/update/{id}','ProfileController@update')->name("profile.update");

});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search')->name('search');

Route::get('/videos-listing', 'frontend\VideosController@index');
Route::get('/health-listing', 'frontend\HealthtopicsController@index');
Route::get('/drugs-listing', 'frontend\DrugssupplementsController@index');
Route::get('/video/detail/{id}', 'frontend\VideosController@show')->name("video.detail");

Route::get('/saved', 'frontend\SavedController@index')->name("video.saved");
Route::post('/saved-items','frontend\SavedController@store')->name("saved");




