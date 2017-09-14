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
    return view('home');
});



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/standart1', 'HomeController@toStandart1')->name('standart1');
Route::post('/standart1', 'HomeController@standart1')->name('post_standart1');

Route::get('/standart2', 'HomeController@toStandart2')->name('standart2');
Route::post('/standart2', 'HomeController@standart2')->name('post_standart2');

Auth::routes();