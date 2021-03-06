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

Route::get('/', 'PageController@alpha' )->name('home');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/where', 'PageController@where')->name('where');

Route::get('/movies', 'MovieController@index')->name('movies');