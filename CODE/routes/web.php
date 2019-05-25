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

Route::get('/', function () {
    return view('layouts/index');
});
Route::get('/chi-tiet', function () {
    return view('layouts/product-detail');
});

Route::get('/login', function () {
    return view('layouts/login');
});

Route::get('/register', function () {
    return view('layouts/register');
});

Route::get('/san-pham', function () {
    return view('layouts/products');
});