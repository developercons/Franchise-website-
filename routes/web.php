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

    Route::post('addRequest',"FranchiseController@addRequestFranchise")->name("addRequest");
    Route::post('removeRequest',"FranchiseController@removeRequestFranchise")->name("removeRequest");

    Route::get('Demande',"FranchiseController@demandeIndex")->name("demande");
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//Candidatheque Routes
Route::group(['prefix' => 'candidatheque'],function(){

    Route::get('/','CandidathequeController@index');
    //Candidat Routes
    Route::group(['prefix' => 'candidat'], function () {
        Route::get('/login', 'CandidatAuth\LoginController@showLoginForm')->name('login');
        Route::post('/login', 'CandidatAuth\LoginController@login');
        Route::post('/logout', 'CandidatAuth\LoginController@logout')->name('logout');
      
        Route::get('/register', 'CandidatAuth\RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'CandidatAuth\RegisterController@register');
      
        Route::post('/password/email', 'CandidatAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
        Route::post('/password/reset', 'CandidatAuth\ResetPasswordController@reset')->name('password.email');
        Route::get('/password/reset', 'CandidatAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
        Route::get('/password/reset/{token}', 'CandidatAuth\ResetPasswordController@showResetForm');
      });
});


