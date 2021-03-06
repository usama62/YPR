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

Route::get('/', 'HomeController@index');

Auth::routes(['verify' => true]);

Route::get('/admin123', function () {
    return view('auth.admin_login');
});

Route::group(['middleware' => ['verified']], function () {

    // Doctors
    Route::get('/doctor', 'DoctorsController@show');
    Route::get('/create-doctor', 'DoctorsController@create');
    Route::get('/update-doctor/{id}', 'DoctorsController@edit')->name("doctor.edit");
    Route::post('/doctor/create','DoctorsController@store')->name("doctor.store");
    Route::get('/doctor/delete/{id}', 'DoctorsController@destroy')->name("doctor.delete");
    Route::post('/doctor/update/{id}', 'DoctorsController@update')->name("doctor.update");
    Route::get('/doctor/search', 'DoctorsController@search')->name("doctor.search");

    // company
    Route::get('/company', 'CompanyController@show');
    Route::get('/create-company', 'CompanyController@create');
    Route::get('/update-company/{id}', 'CompanyController@edit')->name("company.edit");
    Route::post('/company/create','CompanyController@store')->name("company.store");
    Route::get('/company/delete/{id}', 'CompanyController@destroy')->name("company.delete");
    Route::get('/company/delete/{id}', 'CompanyController@destroy')->name("company.delete");
    Route::post('/company/update/{id}', 'CompanyController@update')->name("company.update");
    Route::get('/company/search', 'CompanyController@search')->name("company.search");

    // Photos
    Route::get('/photos', 'PhotosController@index');
    Route::get('/upload-photos', 'PhotosController@create');
    Route::get('/update-photos/{id}', 'PhotosController@edit')->name("photo.edit");
    Route::post('/photos/upload','PhotosController@store')->name("photos.store");
    Route::get('/photo/delete/{id}', 'PhotosController@destroy')->name("photo.delete");
    Route::get('/photo/search', 'PhotosController@search')->name("photo.search");
    Route::post('/photo/update/{id}', 'PhotosController@update')->name("photo.update");

    // Videos
    Route::get('/videos', 'VideosController@index');
    Route::get('/upload-videos', 'VideosController@create');
    Route::get('/update-videos/{id}', 'VideosController@edit')->name("videos.edit");
    Route::post('/videos/upload','VideosController@store')->name("videos.store");
    Route::post('/video/update/{id}', 'VideosController@update')->name("videos.update");
    Route::get('/video/delete/{id}', 'VideosController@destroy')->name("videos.delete");
    Route::get('/video/search', 'VideosController@search')->name("videos.search");

    // Category
    Route::get('/create-category', 'CategoryController@create');
    Route::get('/category', 'CategoryController@show');
    Route::post('/category/create','CategoryController@store')->name("category.store");
    Route::post('/category/update/{id}','CategoryController@update')->name("category.update");
    Route::get('/category/edit/{id}','CategoryController@edit')->name("category.edit");
    Route::get('/category/delete/{id}', 'CategoryController@destroy')->name("category.delete");
    Route::get('/category/search', 'CategoryController@search')->name("category.search");
    Route::post('/getcategories', 'CategoryController@getcategories')->name("getcategories");
    Route::post('/get-categories', 'CategoryController@getcategoriesforfrontend')->name("getcategoriesforfrontend");

    // Article
    Route::get('/create-blog', 'ArticleController@create');
    Route::get('/blogs', 'ArticleController@show');
    Route::get('/update-blog/{id}', 'ArticleController@edit')->name("article.edit");
    Route::post('/blog/update/{id}', 'ArticleController@update')->name("article.update");
    Route::post('/blog/create','ArticleController@store')->name("article.store");
    Route::get('/blog/delete/{id}', 'ArticleController@destroy')->name("article.delete");
    Route::get('/blog/search', 'ArticleController@search')->name("article.search");

    // Drugs
    Route::get('/create/drugs', 'DrugsController@create');
    Route::get('/drugs', 'DrugsController@show');
    Route::get('/type-drugs', 'DrugsController@type_Drugs');
    Route::post('/type-drugs/create','DrugsController@type_Drugs_store')->name("type_drugs.store");
    Route::get('/type-drugs/delete/{id}', 'DrugsController@delete_type')->name("type_drugs.delete");
    Route::get('/drugs/update/{id}', 'DrugsController@edit')->name("drugs.edit");
    Route::post('/drugs/updated/{id}', 'DrugsController@update')->name("drugs.update");
    Route::post('/drugs/create','DrugsController@store')->name("drugs.store");
    Route::get('/drugs/delete/{id}', 'DrugsController@destroy')->name("drugs.delete");
    Route::get('/drugs/search', 'DrugsController@search')->name("drugs.search");
    Route::get('/drugs-type/search', 'DrugsController@type_search')->name("type_drugs.search");
    Route::post('/drug/consumption', 'DrugsController@newDrugConsumption')->name("drug.consumption");

    // Drugs Brand
    Route::get('/create/drugs-brands', 'DrugBrandController@create');
    Route::get('/drugs-brands', 'DrugBrandController@show');
    Route::get('/drugs-brands/update/{id}', 'DrugBrandController@edit')->name("drugs_brand.edit");
    Route::post('/drugs-brands/updated/{id}', 'DrugBrandController@update')->name("drugs_brand.update");
    Route::post('/drugs-brands/create','DrugBrandController@store')->name("drugs_brand.store");
    Route::get('/drugs-brands/delete/{id}', 'DrugBrandController@destroy')->name("drugs_brand.delete");
    Route::get('/drugs-brands/search', 'DrugBrandController@search')->name("drugs_brand.search");

    // Health
    Route::get('/create/health', 'HealthController@create');
    Route::get('/health/update/{id}', 'HealthController@edit')->name("health.edit");
    Route::post('/health/updated/{id}', 'HealthController@update')->name("health.update");
    Route::get('/health', 'HealthController@show');
    Route::get('/type-health', 'HealthController@type_Health');
    Route::post('/type-health/create','HealthController@type_Health_store')->name("type_health.store");
    Route::get('/type-health/delete/{id}', 'HealthController@delete_type')->name("type_health.delete");
    Route::post('/health/create','HealthController@store')->name("health.store");
    Route::get('/health/delete/{id}', 'HealthController@destroy')->name("health.delete");
    Route::get('/health/search/', 'HealthController@search')->name("health.search");
    Route::get('/health-type/search/', 'HealthController@type_search')->name("type_health.search");

    // Disease
    Route::get('/create/disease', 'DiseaseController@create');
    Route::get('/disease/update/{id}', 'DiseaseController@edit')->name("disease.edit");
    Route::post('/disease/updated/{id}', 'DiseaseController@update')->name("disease.update");
    Route::get('/disease', 'DiseaseController@show');
    Route::get('/type-disease', 'DiseaseController@type_Disease');
    Route::post('/type-disease/create','DiseaseController@type_Disease_store')->name("type_disease.store");
    Route::get('/type-disease/delete/{id}', 'DiseaseController@delete_type')->name("type_disease.delete");
    Route::post('/disease/create','DiseaseController@store')->name("disease.store");
    Route::get('/disease/delete/{id}', 'DiseaseController@destroy')->name("disease.delete");
    Route::get('/disease/search', 'DiseaseController@search')->name("disease.search");
    Route::get('/disease-type/search', 'DiseaseController@type_search')->name("disease_type.search");

    // Pages
    Route::get('/create/page', 'PageController@create');
    Route::get('/page/update/{id}', 'PageController@edit')->name("page.edit");
    Route::post('/page/updated/{id}', 'PageController@update')->name("page.update");
    Route::post('/page/create','PageController@store')->name("page.store");
    Route::get('/page/delete/{id}', 'PageController@destroy')->name("page.delete");
    Route::get('/page/search', 'PageController@search')->name("page.search");
    Route::get('/pages-listing', 'PageController@index');

    // Settings
    Route::get('/settings', 'SettingsController@index');
    Route::post('/logo','SettingsController@store')->name("logo.store");

    // Saved Items
    Route::get('/saveditems', 'SaveditemsController@index');

    // admin
    Route::get('/admin', 'AdminController@index');
    Route::get('/manage-users', 'AdminController@users');
    Route::get('/create-users', 'AdminController@create');
    Route::post('/store-user','AdminController@store')->name("store.user");
    Route::get('/user-edit/{id}','AdminController@edit')->name("user.edit");
    Route::post('/user-update/{id}', 'AdminController@update')->name("user.update");
    Route::get('/user-deactivate/{id}', 'AdminController@deactivate')->name("user.deactivate");
    Route::get('/user-activate/{id}', 'AdminController@activate')->name("user.activate");
    Route::get('/user-delete/{id}', 'AdminController@destroy')->name("user.delete");
    Route::get('/users/search', 'AdminController@search')->name("user.search");


    Route::get('/profile', 'ProfileController@index');
    Route::get('/update-password', 'ProfileController@update_pass');
    Route::post('/change-password/{id}', 'ProfileController@change_pass')->name("pass.update");
    Route::post('/profile/update/{id}','ProfileController@update')->name("profile.update");

    Route::get('/saveditems-delete/{id}', 'frontend\SavedController@destroy')->name("saved.delete");

});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search')->name('search');

Route::get('/videos-listing', 'frontend\VideosController@index');
Route::get('/health-listing', 'frontend\HealthtopicsController@index');
Route::get('/drugs-listing', 'frontend\DrugssupplementsController@index');
Route::get('/disease-listing', 'frontend\DiseasefrontController@index');
Route::get('/blogs-listing', 'frontend\BlogsfrontController@index');

Route::get('/drugs/detail/{id}', 'DrugsController@details')->name("drugs.detail");
Route::get('/blog/detail/{id}', 'ArticleController@details')->name("blog.detail");
Route::get('/health/detail/{id}', 'HealthController@details')->name("health.detail");
Route::get('/disease/detail/{id}', 'DiseaseController@details')->name("disease.detail");
Route::get('/video/detail/{id}', 'frontend\VideosController@show')->name("video.detail");
Route::get('/page/{slug}', 'PageController@show')->name("page.show");

Route::get('/saved', 'frontend\SavedController@index');
Route::post('/saved-items','frontend\SavedController@store')->name("saved");
Route::get('/saved-posts','frontend\SavedController@show');

Route::post('/get-by-literal-group', 'HealthtopicsController@getdata')->name("getdata");
Route::get('/health-search/', 'frontend\HealthtopicsController@getdata')->name("health_front.search");
Route::get('/disease-search/', 'frontend\DiseasefrontController@getdata')->name("disease_front.search");
Route::get('/drug-search/', 'frontend\DrugssupplementsController@getdata')->name("drug_front.search");
Route::get('/blog-search/', 'frontend\BlogsfrontController@getdata')->name("blog_front.search");
Route::get('/video-search/', 'frontend\VideosController@getdata')->name("video_front.search");

Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');



