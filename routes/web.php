<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/confirm-repair-work', function () {
    return view('confirm-repair-work');
})->name('confirm-repair-work');

Route::get('/customer-registration', function () {
    return view('customer-registration');
})->name('customer-registration');

Route::get('/service-status', function () {
    return view('service-status');
})->name('service-status');