<?php

use Illuminate\Support\Facades\Route;

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

/* Guest routes */
Route::get('/', function () {
    return view('guest.welcome');
});
Route::resource('posts', PostController::class)->only(['index', 'show']);

Auth::routes();

/* Admin routes */
Route::middleware('auth')->prefix('admin')->namespace('admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('posts', PostController::class);
});


