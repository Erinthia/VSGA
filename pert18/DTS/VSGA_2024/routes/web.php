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
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello VSGA';
});

Route::get('/world', function () {
    return 'hello dunia';
});

Route::get('/', function () {
    return 'selamat datang';
});

Route::get('/about', function () {
    return 'NIM: 2231740005, Nama: Erinthia Dinda Pratiwi';
});
