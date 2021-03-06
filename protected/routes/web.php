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
Route::resource('/feedback','FeedbackController');
Route::resource('/chart', 'ChartController');

Route::get('/getchart', 'ChartController@getChartPuas');
Route::get('/getkunjungan', 'ChartController@getChartKunjungan');
