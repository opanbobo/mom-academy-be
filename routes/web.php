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
});

Route::post('login', 'LoginController@index'); // Login
Route::post('register', 'LoginController@register'); //Register
Route::get('logout', 'LoginController@logout'); //Register

// abou us
Route::group(['prefix' => 'about-us'], function () {
    Route::get('/', 'AboutController@index');    
});

// article
Route::group(['prefix' => 'articles'], function () {
    Route::get('/', 'ArticleController@index');
    Route::get('/detail/{id}', 'ArticleController@detail');
});

// class
Route::group(['prefix' => 'class'], function () {
    Route::get('/', 'ClassController@index');
    Route::get('/detail/{slug}', 'ClassController@detail');
});

// get income
Route::group(['prefix' => 'get-income'], function () {
    Route::get('/', 'IncomeController@index');    
});

// events
Route::group(['prefix' => 'events'], function () {
    Route::get('/', 'EventsController@index');    
    Route::get('/detail/{id}', 'EventsController@detail');
});

// market day
Route::group(['prefix' => 'market-day'], function () {
    Route::get('/', 'MarketController@index');    
    Route::get('/detail/{id}', 'MarketController@detail');

});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//google
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
//facebook
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');
  
// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
// Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
