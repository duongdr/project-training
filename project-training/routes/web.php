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

//Route::middleware('auth')->group(function () {
// Admin routes

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('home', 'DashboardController@index');
    Route::prefix('user')->group(function () {
        Route::get('test', 'UserController@index');
        Route::get('/','UserController@indexTest');
        Route::get('get-json','UserController@getJson');
        Route::get('create', 'UserController@create');
        Route::post('create', 'UserController@store')->name('storeUser');
        Route::get('delete/{id}', 'UserController@destroy');
        Route::get('{id}', 'UserController@show');
        Route::post('{user}', 'UserController@update');
    });
    Route::prefix('post')->group(function () {
        Route::get('test', 'PostController@index');
        Route::get('/','PostController@indexTest');
        Route::get('get-json','PostController@getJson');
        Route::get('create', 'PostController@create');
        Route::post('create', 'PostController@store')->name('storePostAdmin');
        Route::get('{id}', 'PostController@show');
        Route::post('{post}', 'PostController@update');
        Route::get('delete/{id}', 'PostController@destroy');
    });
});
Route::group(['prefix' => 'user', 'middleware' => 'user'], function () {
    Route::get('home', 'UserHomeController@index');
    Route::prefix('post')->group(function () {
        Route::get('/', 'PostController@index');
        Route::get('create', 'PostController@creatByUser');
        Route::post('create', 'PostController@store')->name('storePost');
        Route::get('{id}', 'PostController@show');
        Route::post('{post}', 'PostController@update')->name('updatePost');
        Route::get('delete/{id}', 'PostController@destroy');
    });
});
//});

Route::post('userLogin', 'AuthController@login')->name('userLogin');
Route::get('logout', 'AuthController@logout')->name('logout');
Auth::routes();
