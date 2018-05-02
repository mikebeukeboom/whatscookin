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

Route::get('/dishes/create', 'DishController@create');

Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories/store', 'CategoryController@store');