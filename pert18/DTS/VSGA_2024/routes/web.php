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

Route::get('/user/{name}', function ($name) {
    return 'Nama saya adalah ' . $name;
});

Route::get('/posts/{post}/{comment}', function ($post, $comment) {
    return 'Pos ke-' . $post . ' dengan komentar ke-' . $comment;
});

Route::get('/kodebarang/{jenis?}/{merek?}', function ($jk='k01',$mrk='nokia') {
    return "kode barang " . $jk . " dan nama barang " .$mrk;
});

Route::get('about', function () {
    return view ('about');
})->name('about');

Route::get('tampil', function () {
    return view ('tampil');
})->name('tampil');