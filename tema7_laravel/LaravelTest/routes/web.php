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
Route::get('/cataleg', array('uses'=>'ProductsController@cataleg', 'as'=>'llistaProds')); //uses indica quin controlador utilitza
Route::get('/contacte', array('uses'=>'ProductsController@contacte', 'as'=>'contact'));
Route::get('/privacitat', array('uses'=>'ProductsController@privacitat', 'as'=>'privacy'));
Route::get('/idioma/{locale}', array('uses'=>'ProductsController@canviIdioma', 'as'=>'canviIdioma'));

Route::get('/cataleg/detall/{id}', array('uses'=>'ProductsController@detallCataleg', 'as'=>'cataleg_detall'));
Route::resource('/categories', 'CategoriesController');