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

Auth::routes();

Route::get('/url', function () {
    return view('partials.list');
});

Route::get('/url/create', function () {
    return view('partials.form');
});

Route::get('/', function () {
    return view('home');
});