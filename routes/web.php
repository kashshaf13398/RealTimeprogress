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

Route::get('/courses','BoloController@getCourse')->name('Courses')->middleware('auth');
Route::get('/web','BoloController@getHome')->name('Home')->middleware('auth');
Route::get('/about','BoloController@getAbout')->name('About');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//$post= DB:: table('posts')->join('catagories','posts.catagory_id','catagories.id')->select('posts.*,catagories.name')->get();

Route::get('/about/more','BoloController@aboutMore')->name('about.more');

Route::get('/create/class','BoloController@createClass')->name('create.class');

Route::post('/store/class','ClassController@storeClass')->name('store.class');