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
    return view('admin.index');
});
Route::get('/about-us', function () {
    return view('admin.about-us');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/subject', function () {
    return view('subject');
});
//Route::resource('admin/data','Admin\DataController');
