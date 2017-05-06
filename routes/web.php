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


Route::get('/subject', function () {
    return view('subject');
});
Route::get('/', function () {
    return view('index');
});
//Route::resource('admin/data','Admin\DataController');

Auth::routes();
Route::get('/home', 'HomeController@admin');
Route::get('admin/promotions', 'PromotionsController@index');
Route::get('admin/students', 'StudentsController@index');
Route::get('admin/courses', 'CoursesController@index');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/admin',function(){
      return view('admin.index');
    })->name('admin');
    Route::get('admin/promotions', 'PromotionsController@index')->name('admin');
    Route::get('/student',function(){
      return view('student.index');
    })->name('student');
});
