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
        });
        Route::prefix('post')->group(function () {
            Route::get('index','PostController@index');
        });
    });
});

Route::post('userLogin', 'AuthController@login')->name('userLogin');
Route::get('logout', 'AuthController@logout')->name('logout');
Auth::routes();
