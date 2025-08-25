<?php

use Illuminate\Support\Facades\Route;

//Redirect
Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});
