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
    return view('auth/login');
});

Route::get('/courses','BoloController@getCourse')->name('Courses');
Route::get('/web','BoloController@getHome')->name('Home');
Route::get('/about','BoloController@getAbout')->name('About');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');