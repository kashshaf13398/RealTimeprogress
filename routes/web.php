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

Route::get('/courses/dynamic','ClassController@getCourse');

Route::get('/view/courses/{id}','ClassController@getInCourse');

Route::post('/store/student/{id}','ClassController@storeStudent')->name('store.student');

Route::get('/take/attendance/{id}','AttendanceController@takeAttendance')->name('take.attendance');

Route::post('/store/attendance/{id}','AttendanceController@storeAttendance')->name('store.attendancet');

Route::get('/view/attendance/{id}','AttendanceController@viewAttendance')->name('view.attendance');

Route::get('/edit/attendance/{id}','AttendanceController@editAttendance')->name('edit.attendance');

Route::post('/update/attendance/{id}','AttendanceController@updateAttendance')->name('update.attendance');

Route::get('/student/view/attendance/{id}','AttendanceController@studentviewAttendance')->name('studentView.attendance');

Route::get('/upload/tt/{id}','ResultController@upTt')->name('upload.tt');

Route::post('/store/result/{id}','ResultController@storeResult')->name('store.result');

Route::get('/view/result/tt1/{id}','ResultController@viewResult1')->name('view.result1');

Route::get('/view/result/tt2/{id}','ResultController@viewResult2')->name('view.result2');

Route::get('/view/result/tt3/{id}','ResultController@viewResult3')->name('view.result3');

Route::get('/sview/tt1/{id}','ResultController@sviewResult1')->name('sview.result1');

Route::get('/sview/tt2/{id}','ResultController@sviewResult2')->name('sview.result2');

Route::get('/sview/tt3/{id}','ResultController@sviewResult3')->name('sview.result3');