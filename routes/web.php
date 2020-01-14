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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mobil', 'ListmobilController@index')->name('mobil.index');
Route::get('/customer', 'ListcustomerController@index')->name('customer.index');
Route::get('/rental', 'LaporanrentalController@index')->name('rental.index');

Route::post('/mobil/create','ListmobilController@create');
Route::get('/mobil/{id}/edit','ListmobilController@edit');
Route::post('/mobil/{id}/update','ListmobilController@update'); 
Route::get('/mobil/{id}/delete','ListmobilController@delete');

Route::post('/customer/create','ListcustomerController@create');
Route::get('/customer/{id}/edit','ListcustomerController@edit');
Route::post('/customer/{id}/update','ListcustomerController@update');
Route::get('/customer/{id}/delete','ListcustomerController@delete');

Route::post('/rental/create','LaporanrentalController@create');
Route::get('/rental/{id}/edit','LaporanrentalController@edit');
Route::post('/rental/{id}/update','LaporanrentalController@update');
Route::get('/rental/{id}/delete','LaporanrentalController@delete');



