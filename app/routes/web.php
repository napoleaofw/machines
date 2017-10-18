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
    return view('pages.login.index');
});

Route::get('/user/register', function () {
    return view('pages.user.form.index');
});

Route::get('/user/list', function () {
    return view('pages.user.list.index');
});

Route::get('/establishment/register', function () {
    return view('pages.establishment.form.index');
});

Route::get('/establishment/list', function () {
    return view('pages.establishment.list.index');
});

Route::get('/machine/register', function () {
    return view('pages.machine.form.index');
});

Route::get('/machine/list', function () {
    return view('pages.machine.list.index');
});

Route::get('/transaction/register', function () {
    return view('pages.transaction.register.index');
});

Route::get('/transaction/list', function () {
    return view('pages.transaction.list.index');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});