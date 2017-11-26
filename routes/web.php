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
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/openGallery', function () {
    return view('projectGallery');
});

Route::post('/insertUserData', 'CreatesController@add');


Route::post('/check', 'CreatesController@signIn');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
