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

Route::get('/show', function(){
    $urls = App\URL::all();
    return view('partials.show', compact('urls'));
});

/* URLs */
Route::get('/url', 'URLController@index');
Route::get('/url/axios', 'URLController@getAll');

Route::get('/url/create', 'URLController@create');
Route::post('/url', 'URLController@store');

Route::get('/url/{url}', 'URLController@show');
Route::delete('/url/{url}', 'URLController@destroy');


/* Redirect */
Route::get('/{short}', 'RedirectController@redirectURL');

