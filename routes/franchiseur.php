<?php

Route::get('/', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('franchiseur')->user();

    //dd($users);

    return view('franchiseur.home');
})->name('franchiseurHome');

