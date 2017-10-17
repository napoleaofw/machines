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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/user/register', function () {
    return view('user.form.index');
});

Route::get('/user/list', function () {
    return view('user.list.index');
});

Route::get('/establishment/register', function () {
    return view('establishment.form.index');
});

Route::get('/establishment/list', function () {
    return view('establishment.list.index');
});

Route::get('/machine/register', function () {
    return view('machine.form.index');
});

Route::get('/machine/list', function () {
    return view('machine.list.index');
});

Route::get('/transaction/register', function () {
    return view('transaction.register.index');
});

Route::get('/transaction/list', function () {
    return view('transaction.list.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});