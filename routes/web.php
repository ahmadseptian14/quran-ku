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

Route::get('/', 'SurahController@index')->name('surah');
Route::get('/surah-details/{number?}', 'DetailController@index')->name('details');
Route::post('/surah/search', 'SurahController@search')->name('surah-search');
Route::get('/waktu-sholat', 'SholatController@index')->name('waktu-sholat');


