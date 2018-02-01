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
Auth::routes();
Route::get('/login', function() {
	return redirect()->route('home');
})->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/', function () {
//     return view('home');
// })->name('default');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/menu', 'HomeController@menu')->name('menu');
	Route::post('/start', 'HomeController@start')->name('start_simulation');
	Route::get('/list', 'HomeController@list')->name('list');
	Route::get('/view/{id}', 'HomeController@view')->name('view');

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
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:Admin']], function () {
	Route::get('/index', 'AdminController@index')->name('admin.index');
	Route::post('/accreditation/delete', 'AdminController@destroyAccreditation')->name('admin.accreditation.destroy');

	Route::get('/user', 'AdminController@user')->name('admin.user');
	Route::get('/user/create', 'AdminController@createUser')->name('admin.user.create');
	Route::post('/user', 'AdminController@storeUser')->name('admin.user.store');
	Route::post('/user/delete', 'AdminController@destroyUser')->name('admin.user.destroy');

	Route::get('/role', 'AdminController@role')->name('admin.role');
	Route::get('/role/create', 'AdminController@createRole')->name('admin.role.create');
	Route::post('/role', 'AdminController@storeRole')->name('admin.role.store');
	Route::post('/role/delete', 'AdminController@destroyRole')->name('admin.role.destroy');

	Route::get('/program_study', 'AdminController@prodi')->name('admin.prodi');
	Route::get('/program_study/create', 'AdminController@createProdi')->name('admin.prodi.create');
	Route::post('/program_study', 'AdminController@storeProdi')->name('admin.prodi.store');
	Route::post('/program_study/delete', 'AdminController@destroyProdi')->name('admin.prodi.destroy');
});
