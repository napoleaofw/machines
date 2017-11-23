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

// Route::get('login', ); to do
// Route::get('dashboard', );  to do
Route::resource('users', 'UserController');
Route::resource('establishments', 'EstablishmentController');
Route::resource('machines', 'MachineController');
Route::resource('transaction', 'TransactionController'); // add 'only' or 'except'

// Route::get('/login', function () {
//     return view('pages.login.index');
// });

// Route::get('/dashboard', function () {
//     return view('pages.dashboard.index');
// });

// Route::get('/user/register', function () {
//     return view('pages.user.form.index');
// });

// Route::get('/user/list', function () {
//     return view('pages.user.list.index');
// });

// Route::get('/establishment/register', function () {
//     return view('pages.establishment.form.index');
// });

// Route::get('/establishment/list', function () {
//     return view('pages.establishment.list.index');
// });

// Route::get('/machine/register', function () {
//     return view('pages.machine.form.index');
// });

// Route::get('/machine/list', function () {
//     return view('pages.machine.list.index');
// });

// Route::get('/transaction/register', function () {
//     return view('pages.transaction.form.index');
// });

// Route::get('/transaction/list', function () {
//     return view('pages.transaction.list.index');
// });

// Route::get('/invoice', function () {
//     return view('pages.invoice.index');
// });