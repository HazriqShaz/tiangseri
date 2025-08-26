<?php

use Illuminate\Support\Facades\Route;

// Redirect
Route::get('/', function () {
    return redirect('/home');
});
// Redirect End
Route::get('/home', function () {
    return view('home');
});
