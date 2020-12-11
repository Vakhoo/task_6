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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("products/index", "ProductsController@index")->name("productsindex");
Route::get("products/create", "ProductsController@create");


Route::post("products/store", "ProductsController@store")->name("storeproducts");
Route::get("products/show", "ProductsController@show")->name("productshow");
Route::post("products/delete", "ProductsController@destroy")->name("productdelete");
Route::post("products/update", "ProductsController@update")->name("productupdate");


