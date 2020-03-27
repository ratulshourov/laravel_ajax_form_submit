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

Route::get('contact-form', 'ContactController@create');
Route::post('contact-form', 'ContactController@store');
Route::get('contact-list', 'ContactController@contactList');
Route::get('contact-edit/{id}', 'ContactController@contactEdit');
Route::get('contact-delete/{id}', 'ContactController@contactDelete');

