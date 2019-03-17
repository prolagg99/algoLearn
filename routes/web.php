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
    return view('welcome');
});

Route::get('/courses','CourseController@index');
Route::get('/courses/{id}','CourseController@show');

Route::get('/courses/create','CourseController@create');
Route::post('/courses','CourseController@store');


Route::get('/courses/{id}/edit','CourseController@edit');
Route::post('/courses/{id}','CourseController@update');

Route::post('/courses/{id}/delete','CourseController@destroy');
