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
    Route::get('/',"FranchiseController@index")->name('franchiseIndex');
    Route::get('recherche/name={name}',"FranchiseController@searchByName");
    Route::get('recherche/secteur={secteur}',"FranchiseController@searchBySecteur")->name('franchiseSecteur');
    Route::get('recherche/apport={apport}',"FranchiseController@searchByApport");
    Route::get('recherche/secteur={secteur}/apport={apport}',"FranchiseController@searchByApportAndSecteur");

    Route::get('item/{categorie}/{id}-{name?}',"FranchiseController@singleFranchise")->name('singleFranchise');
    Route::get('{categorie?}',"FranchiseController@categoriePage");
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
