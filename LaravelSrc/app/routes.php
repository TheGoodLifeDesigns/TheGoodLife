<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

# PAGES
Route::get('/', 'PagesController@index');


# SESSIONS( LOGIN )
Route::post('/login', ['as' => 'login', 'uses' => 'SessionsController@store']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);

# CONTACT
Route::get('/contact', ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('/contact', ['as' => 'contact', 'uses' => 'ContactController@store']);

