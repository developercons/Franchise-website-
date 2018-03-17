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

Route::get('/',"HomeController@index");


Route::group(['prefix' => 'franchise'], function () {
    Route::get('{categorie}/{id}-{name?}',"FranchiseController@singleFranchise");
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
