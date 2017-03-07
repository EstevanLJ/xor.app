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

Route::get('/view/url', 'AngularController@index');
Route::get('/view/url/create', 'AngularController@create');



// Route::get('/view/url/{url}', 'URLController@show');


/* Redirect */
//Route::get('/{short}', 'RedirectController@redirectURL');

