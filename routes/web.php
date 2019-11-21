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

 Route::get('/logins', function () {
    return view('login');
 }); 
 Route::get('/home', function () {
    return view('main');
 }); 
 Route::get('/user', function () {
    return view('page/users');
 }); 
 Route::get('/role', function () {
    return view('page/role');
 });
 Route::get('/permission', function () {
    return view('page/permission');
 }); 
 Route::post('logins','UserloginController@doLogin');
/* 
Route::get('/register', function () {
    return view('register');
}); */

// Route::resource('logins','UserloginController');
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
