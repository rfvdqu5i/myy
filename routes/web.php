<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('shop', function () {
    return view('shop');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin/login', function () {
    return view('admin.login.index');
});

Route::get('/admin', function () {
    return view('admin.layouts.master');
});
