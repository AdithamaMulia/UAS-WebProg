<?php

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

// murid
Route::get('/', function () {return view('index');});
Route::get('/nilaimapel', function () {return view('nilai');});
Route::get('/raport', function () {return view('nilai1');});

// guru
Route::get('/absen', function () {return view('absen');});
Route::get('/tambahmurid', function () {return view('addsiswa');});
Route::get('/mapel', function () {return view('course');});
Route::get('/kelas', function () {return view('kelas');});
Route::get('/list', function () {return view('pilihan');});
Route::get('/login', function () {return view('login');});

// admin
Route::get('/adminpage1', function () {return view('crudsiswa');});