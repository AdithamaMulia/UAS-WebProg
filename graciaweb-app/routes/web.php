<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;   
use App\Http\Controllers\UserController;   

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
Route::get('/editsiswa', function () {return view('editsiswadariguru');});

// admin
Route::get('/adminsiswa', function () {return view('crudsiswa');});
Route::get('/adminlkelas', [KelasController::class, 'index']);
Route::post('/adminkelas', [KelasController::class, 'store']);
Route::post('/adminkelas/update/{id}', 'KelasController@update')->name('kelas.update');
Route::get('/adminmurid', function () {return view('crudmurid');});
Route::get('/adminnilai', function () {return view('crudnilai');});
Route::get('/adminaddsiswa', function () {return view('tambahsiswa');});
Route::get('/adminaddkelas', function () {return view('tambahkelas');});
Route::get('/adminaddnilai', function () {return view('tambahnilai');});
Route::get('/adminuser', [UserController::class, 'index']);
Route::post('/adminuser', [UserController::class, 'store']);
Route::get('/adminadduser', function () {return view('tambahuser');});
Route::get('/admineditkelas', function () {return view('editkelas');});
Route::get('/adminedituser', function () {return view('edituser');});