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

Route::get('/', 'PageController@index');
Route::get('/history', 'PageController@history');
Route::get('/services', 'PageController@services');
Route::get('/projects', 'PageController@projects');
Route::get('coming-soon', 'PageController@soon');
Route::get('/blog', 'PageController@blog');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin/edit-content', 'AdminController@editContent');

    Route::post('/admin/store', 'ProjectsController@store');
    Route::get('/admin/albums', 'ProjectsController@index');
    Route::get('/admin/create-album', 'ProjectsController@create');
    Route::get('/admin/albums/{id}', 'ProjectsController@show');
    Route::get('/admin/albums/{id}/edit', 'ProjectsController@edit');
    Route::put('/admin/albums/{id}/update', 'ProjectsController@update');
    Route::delete('/admin/albums/{id}', 'ProjectsController@destroy');

    Route::get('/admin/photos/create/{id}', 'PhotosController@create');
    Route::post('/admin/photos/store', 'PhotosController@store');
    Route::get('/admin/photos/{id}', 'PhotosController@show');
    Route::delete('/admin/photos/{id}', 'PhotosController@destroy');

    Route::get('/admin/services/create', 'ServicesController@create');
    Route::post('/admin/services/store', 'ServicesController@store');

    Route::get('/admin/blog', 'BlogController@index');
    Route::get('/admin/blog/create', 'BlogController@create');
    Route::post('/admin/blog/store', 'BlogController@store');
    Route::delete('/admin/blog/{id}', 'BlogController@destroy');
    Route::get('/admin/blog/{id}/edit', 'BlogController@edit');
    Route::put('/admin/blog/{id}/update', 'BlogController@update');

    Route::get('/admin', 'AdminController@index');

});








Route::resource('admin', 'AdminController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
