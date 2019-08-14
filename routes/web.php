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
Route::get('/duck', 'DuckController@show');
Route::get('/walk', 'DuckController@walk');
Route::get('/sleep', 'DuckController@sleep');
Route::get('/eat', 'DuckController@eat');
Route::get('/breath', 'DuckController@breath');
Route::get('/wakeUp', 'DuckController@wakeUp');
Route::get('/travelBigDistance', 'DuckController@travelBigDistance');
