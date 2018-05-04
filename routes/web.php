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

//Redirect home
//Todo: Redirect to a nice landing page
Route::get ('/', 'DishController@create');

//Dishes
Route::get('/dishes/create', 'DishController@create');
Route::post('/dishes/store', 'DishController@store');
//Categories
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories/store', 'CategoryController@store');

//Ingredients
Route::get('/ingredients/create', 'IngredientController@create');
Route::post('/ingredients/store', 'IngredientController@store');