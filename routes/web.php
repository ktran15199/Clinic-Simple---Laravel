<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index')->name('post.index');
Route::post('/posts', 'PostsController@search')->name('post.search');
Route::get('/posts/{id}', 'PostsController@show')->name('post.show');

Route::get('/booking', 'BookingController@index')->name('booking.index');
Route::post('/booking', 'BookingController@store')->name('booking.store');

Route::get('/logout','Auth\LoginController@logout')->name('logout_get');
