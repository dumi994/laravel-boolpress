<?php
use App\Post;

use Illuminate\Support\Facades\Route;
use App\Http\Resources\PostResource;
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
Route::get('posts/{post}', function (Post $post) {
    return new PostResource(Post::find($post));
});

Auth::routes();

/* Altre Pagine non connesse ad un entitá/modello  */
Route::get('/', 'PostController@index')->name('guests.welcome');
Route::get('about', 'PostController@about')->name('guests.about');
Route::get('contacts', 'PageController@contacts')->name('guests.contacts');
Route::post('contacts', 'PageController@sendContactForm')->name('contacts.send');


/* Posts per l'utente */
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');

/* Categorie */
Route::get('categories/{category:slug}', 'CategoryController@show')->name('categories.show');


/* admin route */
Route::middleware('auth')->namespace('admin')->name('admin')->prefix('admin')->group(function (){
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('posts', PostController::class);
    
});

/* blocca registrazioni */
//Auth::routes(['register' => false]);

