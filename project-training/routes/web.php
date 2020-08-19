<?php

use Illuminate\Support\Facades\Auth;

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

Route::middleware('auth')->group(function () {
    // Admin routes
    Route::prefix('admin')->group(function () {
        Route::get('home', 'DashboardController@index');
        Route::prefix('user')->group(function (){
            Route::get('index', 'UserController@index');
            Route::get('create','UserController@create');
            Route::post('create','UserController@store')->name('storeUser');
            Route::get('delete/{id}','UserController@destroy');
        });
        Route::prefix('post')->group(function () {
            Route::get('index','PostController@index');
            Route::get('create','PostController@create');
            Route::post('create','PostController@store')->name('storePost');
        });
    });
    Route::prefix('user')->group(function (){
       Route::get('home','UserHomeController@index');
        Route::prefix('post')->group(function () {
            Route::get('index','PostController@index');
            Route::get('create','PostController@create');
            Route::post('create','PostController@store')->name('storePost');
            Route::get('{id}', 'PostController@show');
            Route::post('{post}', 'PostController@update')->name('updatePost');
        });
    });
});

Route::post('userLogin', 'AuthController@login')->name('userLogin');
Route::get('logout', 'AuthController@logout')->name('logout');
Auth::routes();
