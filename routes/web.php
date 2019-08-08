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
    return view('home');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/students', 'StudentController@index')->name('students.index');
Route::get('/students/{student}/delete', 'StudentController@destroy')->name('students.destroy');
Route::post('/students', 'StudentController@store')->name('students.store');
Route::get('/students/create', 'StudentController@create')->name('students.create');
Route::get('/students/{student}/edit', 'StudentController@edit')->name('students.edit');
Route::patch('/students/{student}', 'StudentController@update')->name('students.update');
Route::post('/students/delete', 'StudentController@delete')->name('students.delete');

Route::get('/lessons', 'LessonController@index')->name('lessons.index');
Route::get('/lessons/{lesson}/delete', 'LessonController@destroy')->name('lessons.destroy');
Route::post('/lessons', 'LessonController@store')->name('lessons.store');
Route::get('/lessons/create', 'LessonController@create')->name('lessons.create');
Route::get('/lessons/{lesson}/edit', 'LessonController@edit')->name('lessons.edit');
Route::patch('/lessons/{lesson}', 'LessonController@update')->name('lessons.update');
Route::post('/lessons/delete', 'LessonController@delete')->name('lessons.delete');

Route::get('/reports', 'ReportController@index')->name('reports.index');
Route::get('/reports/{report}/delete', 'ReportController@destroy')->name('reports.destroy');
Route::post('/reports', 'ReportController@store')->name('reports.store');
Route::get('/reports/create', 'ReportController@create')->name('reports.create');
Route::get('/reports/{report}/edit', 'ReportController@edit')->name('reports.edit');
Route::patch('/reports/{report}', 'ReportController@update')->name('reports.update');
Route::post('/reports/delete', 'ReportController@delete')->name('reports.delete');
Route::post('/reports/export', 'ReportController@export')->name('reports.export');




