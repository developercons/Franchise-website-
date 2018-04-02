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
Route::get('/Accueil',"HomeController@home");


Route::group(['prefix' => 'franchise'], function () {
    Route::get('/',"FranchiseController@index")->name('franchiseIndex');
    Route::get('recherche/name={name}',"FranchiseController@searchByName");
    Route::get('recherche/secteur={secteur}',"FranchiseController@searchBySecteur")->name('franchiseSecteur');
    Route::get('recherche/category={category}',"FranchiseController@searchByCategory")->name('franchiseCategory');
    Route::get('recherche/apport={apport}',"FranchiseController@searchByApport")->name("searchApport");
    Route::get('recherche/secteur={secteur}/apport={apport}',"FranchiseController@searchByApportAndSecteur");

    Route::get('item/{categorie?}/{id}-{name?}',"FranchiseController@singleFranchise")->name('singleFranchise');

    Route::post('addRequest',"FranchiseController@addRequestFranchise")->name("addRequest");
    Route::post('removeRequest',"FranchiseController@removeRequestFranchise")->name("removeRequest");

    Route::get('Demande',"FranchiseController@demandeIndex")->name("demande");
    Route::post('Demande',"FranchiseController@sendRequest");
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//Candidatheque Routes
Route::group(['prefix' => 'candidatheque'],function(){

    Route::get('/','CandidathequeController@index')->name('candidatheque');
    //Candidat Routes
    Route::group(['prefix' => 'candidat'], function () {
        Route::get('/login', 'CandidatAuth\LoginController@showLoginForm')->name('login');
        Route::post('/login', 'CandidatAuth\LoginController@login');
        Route::post('/logout', 'CandidatAuth\LoginController@logout')->name('logout');
      
        Route::get('/inscription', 'CandidatAuth\RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'CandidatAuth\RegisterController@register');
      
        Route::post('/password/email', 'CandidatAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
        Route::post('/password/reset', 'CandidatAuth\ResetPasswordController@reset')->name('password.email');
        Route::get('/password/reset', 'CandidatAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
        Route::get('/password/reset/{token}', 'CandidatAuth\ResetPasswordController@showResetForm');
      
        Route::get('/modify', 'CandidatController@modifyPage')->name('candidatModifyPage');
        Route::post('/modifyCandidat', 'CandidatController@modifyCandidat')->name('modifyCandidat');
    });
});


//Pages Routes
Route::group(['prefix' => 'pages'] , function(){
    Route::get('/tout-savoir-franchise', function(){ return view('pages.comprendre-franchise'); })->name('pageAll');
    Route::get('/par-ou-commencer', function(){ return view('pages.par-ou-commencer'); })->name('pageParOuCommencer');
    Route::get('/choisir-franchise', function(){ return view('pages.choisir-franchise'); })->name('pageChoisirFranchise');

});


//PDF  CRETOR MUST REMOVE AFTER DEPLOY
Route::get('/PDFCreator',function(){
    return Redirect::to('https://marouanesh.github.io/PDFCreator/');
});

Route::get('/mailable', function () {
    $invoice = App\Demande::find(13);
    
    return new App\Mail\SendRequestMail($invoice);
});