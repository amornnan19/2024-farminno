<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return redirect('/list');});

Route::get('/list', function () {return view('list');})->name('list');

Route::get('/home', function () {return view('home');})->name('home');

Route::get('/login', function () {return view('login');})->name('login');

Route::get('/register', function () {return view('register');})->name('register');

Route::get('/confirm-repair-work', function () {return view('confirm-repair-work');})->name('confirm-repair-work');

Route::get('/customer-registration', function () {return view('customer-registration');})->name('customer-registration');

Route::get('/service-status', function () {return view('service-status');})->name('service-status');
Route::get('/service-status-detail', function () {return view('service-status-detail');})->name('service-status-detail');

Route::get('/product', function () {return view('product');})->name('product');
Route::get('/product-detail', function () {return view('product-detail');})->name('product-detail');

Route::get('/drone-registration', function () {return view('drone-registration');})->name('drone-registration');

Route::get('/my-account', function () {return view('my-account');})->name('my-account');
