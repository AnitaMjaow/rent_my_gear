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

Auth::routes();
Route::get('/projects/index', 'HomeController@index');
Route::get('category/{id}','HomeController@adsByCategory');


// Route::get('/index', 'PageController@index');
Route::get('/layouts/adsCategory', 'ArticleController@create');
Route::get('/projects/create', 'CategoryController@create');

Route::post('/adsCategory', 'ArticleController@store');
Route::post('/projects', 'CategoryController@store');
Route::post('/projects', 'ImageController@store');


Route::get('/layouts/show/{id?}',
 ['uses'=>'ArticleController@show','as'=>'layouts.show']);
Route::middleware(['auth'])->group(function() {
	Route::resource('admin/article', 'admin\ArticleController');
	Route::resource('/projects', 'ProjectController');
	Route::resource('/todos', 'TodoController');
	Route::get('/dashboard', 'DashboardController@index');
	Route::resource('admin/article', 'admin\ArticleController');
});
