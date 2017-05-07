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
Route::get('/','homeController@index');
Route::get('/about-us','aboutController@index');
Route::get('/loginme','loginController@login');
Route::get('/reserveindex','reserveController@index');
Route::post('/reserveme','reserveController@reserve');
Route::post('/reservedel','reserveController@delReserve');
Route::get('/reserve','reserveController@showReserve');
Route::get('/getPDF','PDFController@getPDF');
Route::get('/service','PDFController@getPDF');
Route::get('/course','CourseController@getCourse');
