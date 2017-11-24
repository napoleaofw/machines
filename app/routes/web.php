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

// how to use partials 'only' and 'except' for both api and web?

Route::get('login', 'LoginController@index')->name('login');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('users', 'UserController');
Route::resource('establishments', 'EstablishmentController');
Route::resource('machines', 'MachineController');
Route::resource('transactions', 'TransactionController'); // add 'only' or 'except'