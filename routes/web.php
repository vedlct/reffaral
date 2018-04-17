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
    return view('login');
});

Route::get('/Email/add', 'EmailController@add')->name('email.add');
Route::get('/Email/show', 'EmailController@show')->name('email.show');
Route::post('/Email/add', 'EmailController@insert')->name('email.insert');
Route::post('/Email/delete', 'EmailController@delete')->name('email.delete');
Route::post('/Email/update', 'EmailController@update')->name('email.update');



Route::get('/Email/send', 'EmailController@sendMail')->name('email.send');


Route::get('/Email/send', 'EmailController@sendMailShow')->name('email.sendMailShow');
Route::post('/Email/send', 'EmailController@sendMail')->name('email.sendMail');


Route::get('/Email/sendRefferEmail', 'EmailController@sendRefferEmail')->name('email.sendRefferMail');
Route::get('/Email/sendEmail', 'EmailController@sendEmail')->name('email.sendEmail');

Route::post('/ShareEmail', 'Client@showRaffaral')->name('shareemail');
Route::post('/saveemail', 'Client@saveEmail')->name('saveemail');
Route::get('/ReffaralEmail', 'Client@reffaralEmail')->name('reffaralemail');
Route::get('/ReffaralOrderList', 'Client@reffaralOrderList')->name('reffaralOrderList');


Route::get('/order', 'Client@OrderView')->name('orderview');
Route::get('/order/submit', 'Client@OrderSubmit')->name('order');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
