<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SessionController;


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
//login
Route::get('/', [SessionController::class, 'signin']);
Route::post('/login', [SessionController::class, 'login']);

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
Route::get('/editsiswa', function () {return view('editsiswadariguru');});
Route::get('/guruaddsiswa', function () {return view('gurutambahsiswa');});

// admin
Route::get('/adminkelasindex', [KelasController::class, 'index']);
Route::post('/adminkelasadd', [KelasController::class, 'store'])->name('adminkelas.add');
Route::post('/adminkelasupdate/{kelasID}', [KelasController::class, 'update'])->name('adminkelas.update');
Route::get('/admineditkelas/update/{kelasID}', 'App\Http\Controllers\KelasController@edit')->name('admineditkelas.update');

Route::get('/listadmin', function () {return view('pilihanadmin');});
Route::get('/adminabsen', function () {return view('crudabsen');});

Route::get('/adminmurid', function () {return view('crudmurid');});
Route::get('/adminnilai', function () {return view('crudnilai');});
Route::get('/adminaddsiswa', function () {return view('tambahsiswa');});
Route::get('/adminaddkelas', function () {return view('tambahkelas');});
Route::get('/adminaddmapel', function () {return view('tambahmapel');});
Route::get('/adminaddnilai', function () {return view('tambahnilai');});
Route::get('/adminadduser', function () {return view('tambahuser');});


Route::get('/adminuserindex', [UserController::class, 'index']);
Route::post('/adminuseradd', [UserController::class, 'store'])->name('adminuser.add');
Route::post('/adminuserupdate/{userID}', [UserController::class, 'update'])->name('adminuser.update');
Route::get('/adminedituser/update/{userID}', 'App\Http\Controllers\UserController@edit')->name('adminedituser.update');


Route::get('/admineditnilai', function () {return view('editnilai');});
Route::get('/admineditsiswa', function () {return view('editsiswa');});


Route::get('/adminmapelindex', [MapelController::class, 'index']);
Route::post('/adminmapeladd', [MapelController::class, 'store'])->name('adminmapel.add');
Route::post('/adminmapelupdate/{mapelID}', [MapelController::class, 'update'])->name('adminmapel.update');
Route::get('/admineditmapel/update/{mapelID}', 'App\Http\Controllers\MapelController@edit')->name('admineditmapel.update');

// miscellanous
Route::get('/test', function () {return view('testing');});
Route::get('/backup', function () {return view('backup');});
