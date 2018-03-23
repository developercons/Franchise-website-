<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('candidat')->user();

//  dd(Auth::user());

    return view('candidat.home');
})->name('home');

