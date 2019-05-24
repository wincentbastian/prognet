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

Route::get('/pengurus', function () {
    return view('pengurus');
});

Route::get('/pengguna', function () {
    return view('pengguna');
});

Route::get('/masuk', function () {
    return view('login');
});

Route::POST('/kirimdata', 'loginController@masuk');
Route::POST('/keluar', 'loginController@keluar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
