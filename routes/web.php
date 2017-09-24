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

Route::get('/standart3', 'HomeController@toStandart3')->name('standart3');
Route::post('/standart3', 'HomeController@standart3')->name('post_standart3');

Route::get('/standart4', 'HomeController@toStandart4')->name('standart4');
Route::post('/standart4', 'HomeController@standart4')->name('post_standart4');

Route::get('/standart5', 'HomeController@toStandart5')->name('standart5');
Route::post('/standart5', 'HomeController@standart5')->name('post_standart5');

Route::get('/standart6', 'HomeController@toStandart6')->name('standart6');
Route::post('/standart6', 'HomeController@standart6')->name('post_standart6');

Route::get('/standart7', 'HomeController@toStandart7')->name('standart7');
Route::post('/standart7', 'HomeController@standart7')->name('post_standart7');

Auth::routes();
