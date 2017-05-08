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




Route::get('/login','loginController@index');
Route::get('/','homesController@index');
Route::get('/about-us','aboutController@index');
Route::get('/loginme','loginController@login');
Route::get('/reserveindex','reserveController@index');
Route::post('/reserveme','reserveController@reserve');
Route::post('/reservedel','reserveController@delReserve');
Route::get('/reserve','reserveController@showReserve');
Route::get('/getPDF','PDFController@getPDF');
Route::get('/course','courseController@getCourse');
Route::get('/voucher','voucherController@getVoucher');
Route::post('/exchange','voucherController@exchange');
Route::get('/profile','profileController@index');
Route::post('/changepass','profileController@changePass');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
