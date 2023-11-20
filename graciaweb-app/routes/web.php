<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;   

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
Route::get('/home', function () {return view('index');});
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
Route::get('/adminpage2', [KelasController::class, 'index']);
Route::post('/adminpage2', [KelasController::class, 'store']);
Route::get('/adminpage3', function () {return view('crudmurid');});
Route::get('/adminpage4', function () {return view('crudnilai');});
Route::get('/adminpage5', function () {return view('tambahsiswa');});
Route::get('/adminpage6', function () {return view('tambahkelas');});
Route::get('/adminpage7', function () {return view('tambahnilai');});
Route::get('/adminpage8', function () {return view('cruduser');});
Route::get('/adminpage9', function () {return view('tambahuser');});