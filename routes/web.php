<?php

use Illuminate\Support\Facades\Route;

Route::get('login', function() {
    echo 'login';
})->name('login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function() {
    return redirect()->route('url.name');
})->middleware('auth');;

Route::get('/nome', function() {
    return 'Maickon';
})->name('url.name');
