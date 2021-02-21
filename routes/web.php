<?php

use Illuminate\Support\Facades\Route;

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
    return view('website/index');
});

Route::get('/order', function () {
    return view('website/order');
});

Route::get('/history', function () {
    return view('website/history');
});

Route::get('/login', function () {
    return view('website/login');
});

Route::get('/regist', function () {
    return view('website/registrasi');
});