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

Route::get('/Email/add', 'EmailController@add')->name('email.add');
Route::post('/Email/add', 'EmailController@insert')->name('email.insert');

Route::get('/Email/send', 'EmailController@sendMail')->name('email.send');
Route::post('/Email/', 'EmailController@sendMail')->name('email.send');