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

Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/team', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/team/data', [App\Http\Controllers\UserController::class, 'getUsers']) ->name('team.data');

Route::get('/project', function () {
    return view('project');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/report', function () {
    return view('report');
});


