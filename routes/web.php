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

// Login
Route::group(['prefix' => 'login'], function () {
    Route::post('/', 'LoginController@index')->name('login');   
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
});

// market day
Route::group(['prefix' => 'market-day'], function () {
    Route::get('/', 'MarketController@index');    
});