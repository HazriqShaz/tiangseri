<?php

use Illuminate\Support\Facades\Route;

// Redirect
Route::get('/', function () {
    return redirect('/home');
});
// Redirect End

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/akif', function () {
    return view('akif');
});
