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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('pages.about');
});


Route::middleware(['web'])->group(function () 
{
	Auth::routes();
	Route::get('/letters', 'LettersController@index');
	Route::post('/letters', 'LettersController@create');
	Route::get('/letters/{letter}/edit', 'LettersController@edit');
	Route::patch('/letters/{letter}', 'LettersController@update');
	Route::get('/letters/{letter}', 'LettersController@show');
	Route::get('/letters/{letter}/delete', 'LettersController@destroy');
	Route::get('/letters/{letter}/contacts', 'ContactsController@create');
	Route::post('/letters/{letter}/contacts/add', 'ContactsController@add');
	Route::get('/letters/{letter}/contacts/{contact}/edit', 'ContactsController@edit');
	Route::patch('/letters/{letter}/contacts/{contact}', 'ContactsController@update');
	Route::get('/letters/{letter}/contacts/{contact}/show', 'ContactsController@show');
	Route::get('/contacts/{contact}/delete', 'ContactsController@destroy');
	Route::get('/profile', 'UsersController@profile');
	Route::post('/profile', 'UsersController@update_profile');

});