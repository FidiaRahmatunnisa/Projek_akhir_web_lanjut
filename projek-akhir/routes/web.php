<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('home');});

//produk
Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index']);
Route::get('/produk/store', [App\Http\Controllers\ProdukController::class, 'store']);

//login
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate']);

//daftar login
Route::get('/daftar', [App\Http\Controllers\LoginController::class, 'daftar']);
Route::post('/store', [App\Http\Controllers\LoginController::class, 'store']);


