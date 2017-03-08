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

Route::get('/', 'HomeController@index');

/* Views */
Route::get('/view/url', 'URLController@listView');
Route::get('/view/url/create', 'URLController@formView');
Route::get('/view/url/{url}', 'URLController@show');

/* URLs */
Route::get('/url', 'URLController@index');
Route::post('/url', 'URLController@store');
Route::delete('/url/{url}', 'URLController@destroy');

/* Redirect */
Route::get('/{short}', 'RedirectController@redirectURL');

