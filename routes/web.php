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

Route::get('/', 'HomeController@index');

Auth::routes();

// Subscriber routes
Route::post('/subscriber', 'SubscriberController@store')->name('subscriber.store');

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    // category routes
    Route::resource('/category', 'CategoryController');

    // tag routes
    Route::resource('/tag', 'TagController');

    // post routes
    Route::resource('/post', 'PostController');
    Route::get('/post/{id}/is_approved', 'PostController@isApproved')->name('post.is_approved');

    // subscriber routes
    Route::get('/subscriber', 'SubscriberController@index')->name('subscriber.index');
    Route::post('/subscriber/{id}', 'SubscriberController@destroy')->name('subscriber.destroy');


});


Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'author']], function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});
