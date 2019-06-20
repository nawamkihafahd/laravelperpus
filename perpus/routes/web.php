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
Route::group(['namespace' => 'Website'], function () {
	Route::get('/','Home\HomeController@index')->name('landing.index');
	Route::get('/book','Book\BookController@index')->name('book.index');
	Route::get('/pelanggan','Pelanggan\PelangganController@index')->name('pelanggan.index');
	Route::get('/pustakawan','Pustakawan\PustakawanController@index')->name('pustakawan.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
