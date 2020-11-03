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

Route::get('/', 'App\Http\Controllers\PageController@index')->name('index');
Route::get('/listingOne', 'App\Http\Controllers\PageController@listingOne')->name('listingOne');
Route::get('/detailsOne', 'App\Http\Controllers\PageController@detailsOne')->name('detailsOne');
Route::get('/contactOne', 'App\Http\Controllers\PageController@contactOne')->name('contactOne');
