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

Route::get('/', function(){
    return view('base');
});

Route::get('/index', 'HomeController@index');

/* Views */
Route::get('/view/url', 'URLController@listView');
Route::get('/view/url/create', 'URLController@formView');
Route::get('/view/url/{url}', 'URLController@show');
Route::get('/view/user', 'UserController@edit');

/* URLs */
Route::get('/api/url', 'URLController@index');
Route::post('/api/url', 'URLController@store');
Route::delete('/api/url/{url}', 'URLController@destroy');
Route::put('/api/user/{user}', 'UserController@update');

/* Users */

/* Redirect */
//Route::get('/{short}', 'RedirectController@redirectURL');

Route::get('/{url}', function(){
    return view('base');
});

