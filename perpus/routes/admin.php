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
Route::group(['prefix' => 'admin-panel', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
	Route::get('/login','Auth\LoginController@index')->name('auth.index');
	Route::post('login','Auth\LoginController@store')->name('auth.process');
	Route::get('/logout','Auth\LogoutController@index')->name('auth.logout');
	Route::group(['middleware'=> ['admin.auth', 'admin.globalvariable']] , function (){
		Route::get('/','Home\HomeController@index')->name('landing.index');
		Route::resource('book','Book\BookController');
		Route::resource('pelanggan','Pelanggan\PelangganController');
		Route::resource('pustakawan','Pustakawan\PustakawanController');
		Route::resource('jobdesc','Jobdesc\JobdescController');
		Route::resource('bookcategory','Bookcategory\BookCategoryController');
		Route::post('book/addcategory','Book\BookController@addCategory')->name('book.addcategory');
		Route::post('book/deletecategory','Book\BookController@destroyCategory')->name('book.destroycategory');
	});
	
});
