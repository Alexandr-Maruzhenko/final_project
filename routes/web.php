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

//Route::middleware(['auth'])->group(function () {

Route::resource('/', App\Http\Controllers\ArticlesController::class);
Route::resource('articles', App\Http\Controllers\ArticlesController::class);

Route::get('blog', function () {
    return view('infonewportal.blog');
});

Route::get('portfolio', function () {
    return view('infonewportal.portfolio');
});

Route::get('about', function () {
    return view('infonewportal.about');
});

//Route::get('add', function () {
//    return view('infonewportal.add');
//});

//});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});

Route::get('/category/{slug}', 'App\Http\Controllers\ArticlesController@getArticlesByCategory')->name('getArticlesByCategory');

Route::get('/category/{slug_category}/{slug_post}', [App\Http\Controllers\ArticlesController::class, 'getArticle'])->name('getArticle');

Route::get('/add', 'App\Http\Controllers\ArticlesController@create')->name('createArticle');

Route::post('add-comment', [App\Http\Controllers\CommentController::class, 'addComment']);
