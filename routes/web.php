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

Route::get('/evento/{id_event}', 'PublicController@showEvento')
        ->name('evento');

Route::get('/', 'PublicController@showEventi')
        ->name('eventi');

Route::get('/eventifilter', 'PublicController@showEventiFilter')
        ->name('eventifilter');

Route::post('eventifilter', 'PublicController@searchEventiFilter')
        ->name('eventifilter');
Route::get('/admin/newproduct', 'AdminController@addEvent')
        ->name('newproduct');

Route::post('/admin/newevent', 'AdminController@storeEvent')
        ->name('newproduct.store');

Route::get('/admin', 'AdminController@index')
        ->name('admin');

Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');

// Rotte per l'autenticazione
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

// Rotte per la registrazione
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');

Route::view('/where', 'where')
        ->name('where');

Route::view('/who', 'who')
        ->name('who');