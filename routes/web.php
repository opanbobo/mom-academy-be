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

// Route::get('/', function () {
//     return view('login');
// })->middleware(['checklogin']);
  
// // Auth::routes();
// Route::prefix('home')->middleware(['checklogin'])->group(function () {
//     Route::get('/', 'HomeController@index');
// });

// -- LANDING
Route::group(['as' => 'landing.'], function () {
    Route::get('/','HomeController@index')->name('index'); // BASE URL
    Route::get('/home','HomeController@index')->name('home');
    Route::post('/home/login','HomeController@login')->name('login');
    Route::get('/logout', 'HomeController@signout');
});

// Route::get('/login', 'LoginController@index');

// PRODUCT
Route::group(['prefix' => 'login'], function () {
    Route::post('/', 'LoginController@index')->name('login');   
});

// order
Route::group(['prefix' => 'order'], function () {
    Route::get('/cart', 'OrderController@cart');
    Route::get('/checkout', 'OrderController@checkout');
    Route::get('/tracking', 'OrderController@tracking');
    Route::get('/cancel', 'OrderController@cancel');
    Route::get('/done', 'OrderController@done');
    Route::get('/empty-cart', 'OrderController@empty');
    Route::get('/empty-tracking', 'OrderController@empty_tracking');
});

// Profile
Route::group(['prefix' => 'profile'], function () {
    Route::get('/', 'ProfileController@index');
    Route::get('/edit', 'ProfileController@edit');
});
