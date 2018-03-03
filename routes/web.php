<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fancy', 'FancyController@index')->name('fancy');
Route::get('/black', 'BlackController@index')->name('black');
Route::get('/certified', 'CertifiedController@index')->name('certified');
Route::get('/matchingpair', 'MatchingPairController@index')->name('matchingpair');
