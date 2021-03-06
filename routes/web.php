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
//     return view('welcome');
// });
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('admin', )->middleware('auth')->group(function(){

    Route::get('/', ['uses' => 'HomeController@admin', 'as' => 'adminroot']);

    Route::get('/phone', ['uses' => 'HomeController@adminphone', 'as' => 'adminphone']);

    // Route::get('/dept', ['uses' => 'HomeController@admindept', 'as' => 'admindept']);

    Route::prefix('dept', )->group(function(){

        Route::get('/', ['uses' => 'HomeController@admindept', 'as' => 'adminposit']);

        Route::get('/add', ['uses' => 'HomeController@admindeptadd', 'as' => 'adminpositadd']);

        Route::get('/delete', ['uses' => 'HomeController@admindeptdel', 'as' => 'adminpositdel']);

    });

    Route::prefix('posit', )->group(function(){

        Route::get('/', ['uses' => 'HomeController@adminposit', 'as' => 'adminposit']);

        Route::get('/add', ['uses' => 'HomeController@adminpositadd', 'as' => 'adminpositadd']);

        Route::get('/delete', ['uses' => 'HomeController@adminpositdel', 'as' => 'adminpositdel']);

    });

});

Route::prefix('ozch', )->group(function(){

    Route::get('/', ['uses' => 'HomeController@ozch', 'as' => 'ozchroot']);

});

Route::prefix('doc', )->group(function(){

    Route::get('/', ['uses' => 'HomeController@doc', 'as' => 'docroot']);
});

// Route::get('/admin', 'HomeController@admin')->name('admin')->middleware('auth');



// Route::get('/', 'HomeController@index')->name('home');

