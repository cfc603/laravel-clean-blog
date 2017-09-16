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

Route::view(
    '/', 'home', ['posts' => App\Post::where('live', true)->orderBy('created_at', 'desc')->paginate(5)]
)->name('home');
Route::view('/about', 'about')->name('about');

// Contact
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@submit')->name('submit_contact');

// Post
Route::resource('posts', 'PostController');
