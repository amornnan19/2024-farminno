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

Route::get('/dealer-registration', function () {return view('dealer-registration');})->name('dealer-registration');

Route::get('/dealer-home', function () {return view('dealer-home');})->name('dealer-home');

Route::get('/dealer-product-detail', function () {return view('dealer-product-detail');})->name('dealer-product-detail');

Route::get('/dealer-service-status-detail', function () {return view('dealer-service-status-detail');})->name('dealer-service-status-detail');

Route::get('/dealer-report-repair', function () {return view('dealer-report-repair');})->name('dealer-report-repair');

Route::get('/dealer-flight-logs', function () {return view('dealer-flight-logs');})->name('dealer-flight-logs');

Route::get('/dealer-service-status', function () {return view('dealer-service-status');})->name('dealer-service-status');

Route::get('/dealer-service-product-detail', function () {return view('dealer-service-product-detail');})->name('dealer-service-product-detail');

Route::get('/notification', function () {return view('notification');})->name('notification');

Route::get('/notification-detail', function () {return view('notification-detail');})->name('notification-detail');

Route::get('/dealer-my-account', function () {return view('dealer-my-account');})->name('dealer-my-account');

Route::get('/pdpa', function () {return view('pdpa');})->name('pdpa');


