<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Controller;


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
Route::get('/sesi', [SessionController::class, 'signin'])->name('login');
Route::post('/sesi/login', [SessionController::class, 'login']);

//logout
Route::get('/logout', [SessionController::class, 'logout']);

Route::get('/', function () {return view('index');})->middleware('auth');
// murid
Route::group(['prefix' => 'student', 'middleware' => ['auth'], 'as' => 'student'], function(){
    Route::get('/home', function () {
        return view('index'); // Ganti dengan tampilan atau logika yang sesuai
    })->name('student.index');
    Route::get('/nilaimapel', function () {return view('nilai');});
    Route::get('/raport', function () {return view('nilai1');});
});

// guru
Route::group(['prefix' => 'student', 'middleware' => ['auth'], 'as' => 'student'], function(){
    Route::get('/absen/{kelasID}', [Controller::class, 'indexabsen'])->name('absen');
    Route::post('/absensubmit/{kelasID}', [AbsensiController::class, 'submitAbsen'])->name('absen');
    Route::get('/listmurid/{kelasID}', [Controller::class, 'filtered']);
    Route::get('/mapel', function () {return view('course');});
    Route::get('/kelas', [KelasController::class, 'indexutkguru']);
    Route::get('/list/{kelasID}', [KelasController::class, 'pilihan']);
    Route::get('/editsiswa', function () {return view('editsiswadariguru');});
    Route::get('/guruaddsiswa', function () {return view('gurutambahsiswa');});
    Route::get('/nilaisiswa/{userID}/{mapelID}', [Controller::class, 'indexnilai'])->name('nilai.index');
});


Route::post('/nilaisiswa/{userID}/{mapelID}', [NilaiController::class, 'store'])->name('nilai.store');
Route::get('/editnilai/{userID}/{mapelID}', [NilaiController::class, 'edit'])->name('nilai');

// admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin'], function(){
    Route::get('/listadmin', function () {
        return view('pilihanadmin'); // Ganti dengan tampilan atau logika yang sesuai
    })->name('admin.listadmin');
    Route::get('/adminkelasindex', [KelasController::class, 'index']);
    Route::post('/adminkelasadd', [KelasController::class, 'store'])->name('adminkelas.add');
    Route::post('/adminkelasupdate/{kelasID}', [KelasController::class, 'update'])->name('adminkelas.update');
    Route::get('/admineditkelas/update/{kelasID}', 'App\Http\Controllers\KelasController@edit')->name('admineditkelas.update');
    Route::get('/adminabsen', function () {return view('crudabsen');});

    Route::get('/adminabsen', [Controller::class, 'indexabsen']);
    Route::get('/adminabsen/hari/{tanggal}', 'App\Http\Controllers\AbsensiController@index')->name('adminabsen.update');

    Route::get('/adminaddsiswa', function () {return view('tambahsiswa');});
    Route::post('/addUserToClass/{userID}', [UserController::class, 'addUserToClass'])->name('addUserToClass');
    Route::get('/adminaddkelas', function () {return view('tambahkelas');});
    Route::get('/adminaddmapel', function () {return view('tambahmapel');});
    Route::get('/adminaddnilai', function () {return view('tambahnilai');});
    Route::get('/adminadduser', function () {return view('tambahuser');});
    Route::get('/adminmurid/{kelasID}', 'App\Http\Controllers\KelasController@showTabelKelasSiswa');

    Route::get('admin/admin/adminuserindex', [UserController::class, 'index']);
    Route::post('/adminuseradd', [UserController::class, 'store'])->name('adminuser.add');
    Route::post('/adminuserupdate/{userID}', [UserController::class, 'update'])->name('adminuser.update');
    Route::get('/adminedituser/update/{userID}', 'App\Http\Controllers\UserController@edit')->name('adminedituser.update');


    Route::get('/admineditnilai', function () {return view('editnilai');});
    Route::get('/admineditsiswa', function () {return view('editsiswa');});


    Route::get('/adminmapelindex', [MapelController::class, 'index']);
    Route::post('/adminmapeladd', [MapelController::class, 'store'])->name('adminmapel.add');
    Route::post('/adminmapelupdate/{mapelID}', [MapelController::class, 'update'])->name('adminmapel.update');
    Route::get('/admineditmapel/update/{mapelID}', 'App\Http\Controllers\MapelController@edit')->name('admineditmapel.update');
});
// miscellanous
Route::get('/test', function () {return view('testing');});
Route::get('/backup', function () {return view('backup');});
Route::get('/aboutus', function () {return view('aboutus');});
Route::get('/footer', function () {return view('footer');});
Route::get('/contact', function () {return view('contact');});


