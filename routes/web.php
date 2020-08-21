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

Route::group(['prefix' => 'admin'], function () {
    Route::get('actors', 'ActorsController@index');
    Route::delete('actors/{id}','ActorsController@destroy');
    Route::get('movies','MoviesController@index');
    Route::delete('movies/{id}','MoviesController@destroy');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');