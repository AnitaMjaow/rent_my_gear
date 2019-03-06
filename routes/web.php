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



// skapat från php artisan make:auth
Auth::routes();


Route::get('/', 'PageController@welcome');

// middleware samlar resources i funktionen och frågar fler frågor eller något
Route::middleware(['auth'])->group(function() {
	Route::resource('/projects', 'ProjectController');
    Route::resource('/todos', 'TodoController');
    
    // skapat från php artisan make:auth
	Route::get('/dashboard', 'DashboardController@index');
});
