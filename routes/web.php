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
    return view('asta');
});
Route::get('services', 'HomeController@layanan')->name('layanan');
Route::get('portofolio', 'HomeController@fortofolio')->name('fortofolio');
Route::post('pesansave', 'PesanController@createpesan')->name('pesan.save');

Auth::routes();

Route::middleware('auth')->group(function() {
	Route::get('admin', 'AdminController@beranda')->name('beranda');
	Route::prefix('pesan')->group(function() {
		Route::get('/', 'PesanController@indexpesan')->name('pesan.all');
		Route::get('delete/{id}', 'PesanController@deletepesan')->name('pesan.delete');
	});
});