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

Route::get('/', 'pages@index')->name('index');

Route::get('/dashboard', 'admin@index')->name('dashboard');

Route::get('/category', 'CategoryController@category')->name('category');

Route::post('/add-category', 'CategoryController@addCategory')->name('add-category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
