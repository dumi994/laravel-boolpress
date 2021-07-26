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

Route::get('/', function () {
    
    return view('welcome');
});

Auth::routes();

/* Altre Pagine non connesse ad un entitá/modello  */
Route::get('/', 'PostController@index');
Route::get('about', 'PostController@about');
Route::get('contacts', 'PageController@contacts');

/* Posts per l'utente */
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');



/* admin route */
Route::middleware('auth')->namespace('admin')->name('admin')->prefix('admin')->group(function (){
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('posts', PostController::class);
});



