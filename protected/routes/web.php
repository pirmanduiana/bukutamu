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



Route::resource('/daftar','ContentController');

Route::get('/feedback', function(){
	return view('tabs-feedback');
});

Route::get('/statistik', function(){
	return view('tabs-persentase');
});