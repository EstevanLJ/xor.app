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

Route::get('/url', function () {
    return view('partials.list');
});

Route::get('/url/create', function () {
    return view('partials.form');
});

Route::get('/lte/login', function () {
    return view('auth.lte-login');
});

Route::get('/lte/register', function () {
    return view('auth.lte-register');
});

Auth::routes();

//Route::get('/home', 'HomeController@index');

