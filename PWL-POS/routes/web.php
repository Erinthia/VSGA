<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

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
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class,'index']);

Route::get('/cekObject',[AnggotaController::class,'cekObject']);
Route::get('/insert',[AnggotaController::class,'insert']);
Route::get('/update',[AnggotaController::class,'update']);
Route::get('/delete',[AnggotaController::class,'delete']);
Route::get('/all',[AnggotaController::class,'all']);
Route::get('/find',[AnggotaController::class,'find']);
Route::get('/getWhere',[AnggotaController::class,'getWhere']);


