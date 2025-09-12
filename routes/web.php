<?php

use Illuminate\Support\Facades\Route;

// Redirect
Route::get('/', function () {
    return redirect('/home');
});
// Redirect End

Route::get('/home', function () {
    $pageTitle = 'Trusted Home Builder & Renovation Expert  in Seremban, Selangor, and KL';

    return view('home', [
        'pageTitle' => $pageTitle 
    ]);
})->name('home');

Route::get('/contact', function () {
    $pageTitle = 'Contact Us';

    return view('contact', [
        'pageTitle' => $pageTitle
    ]);
})->name('contact');

Route::get('/akif', function () {
    return view('akif');
});
