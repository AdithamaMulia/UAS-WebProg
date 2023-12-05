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
        return view('indexmurid'); // Ganti dengan tampilan atau logika yang sesuai
    })->name('student.indexmurid');
    Route::get('/nilaimapel', function () {return view('nilai');});
    Route::get('/raport', function () {return view('nilai1');});
});

// guru
Route::group(['prefix' => 'teacher', 'middleware' => ['auth'], 'as' => 'teacher'], function(){
    Route::get('/homeguru', function () {
        return view('indexguru'); // Ganti dengan tampilan atau logika yang sesuai
    })->name('teacher.indexguru');
    Route::get('/absen', [Controller::class, 'indexabsen'])->name('absen');
    Route::post('/absensubmit/{kelasID}', [AbsensiController::class, 'submitAbsen'])->name('absen');
    Route::get('/listmurid/{kelasID}', [Controller::class, 'filtered']);
    Route::get('/mapel', function () {return view('course');});
    Route::get('/kelas', [KelasController::class, 'indexutkguru']);
    Route::get('/list/{kelasID}', [KelasController::class, 'pilihan']);
    Route::get('/editsiswa', function () {return view('editsiswadariguru');});
    Route::get('/guruaddsiswa', function () {return view('gurutambahsiswa');});
    Route::get('/nilaisiswa/{userID}/{kelasID}', [Controller::class, 'indexnilai'])->name('nilai.index');
    Route::post('/nilaisiswa/{userID}/{mapelID}', [NilaiController::class, 'store'])->name('nilai.store');
    Route::get('/editnilai/{userID}/{mapelID}', [NilaiController::class, 'edit'])->name('nilai');

    //absen
    Route::get('/setelahabsen/{kelasID}', [AbsensiController::class, 'pilihkapan'])->name('kapanabsen');
});

// admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin'], function(){
    Route::get('/listadmin', function () {
        return view('pilihanadmin'); // Ganti dengan tampilan atau logika yang sesuai
    })->name('admin.listadmin');
    Route::get('/home', function () {
        return view('index'); // Ganti dengan tampilan atau logika yang sesuai
    })->name('student.index');

    //crud kelas
    Route::get('/adminkelasindex', [KelasController::class, 'index']);
    Route::post('/adminkelasadd', [KelasController::class, 'store']);
    Route::get('/adminaddkelas', function () {return view('tambahkelas');});
    Route::post('/adminkelasupdate/{kelasID}', [KelasController::class, 'update']);
    Route::get('/admineditkelas/update/{kelasID}', 'App\Http\Controllers\KelasController@edit')->name('admineditkelas.update');
    Route::get('/adminkelasdelete/{kelasID}', [KelasController::class, 'delete']);

    //masukin murid ke kelas
    Route::get('/adminmurid/{kelasID}', 'App\Http\Controllers\KelasController@showTabelKelasSiswa');
    Route::get('/adminaddsiswa/update/{kelasID}', [UserController::class, 'addtoclass']);
    Route::post('/addUserToClass/{kelasID}', [UserController::class, 'addUserToClass'])->name('addUserToClass');
    //
    Route::get('/kelas', [KelasController::class, 'indexutkguru']);
    Route::get('/adminabsen/hari/{tanggal}', 'App\Http\Controllers\AbsensiController@index')->name('adminabsen.update');

    //crud mapel
    Route::get('/adminmapelindex', [MapelController::class, 'index']);
    Route::get('/adminaddmapel', function () {return view('tambahmapel');});
    Route::post('/adminmapeladd', [MapelController::class, 'store']);
    Route::post('/adminmapelupdate/{mapelID}', [MapelController::class, 'update']);
    Route::get('/admineditmapel/update/{mapelID}', 'App\Http\Controllers\MapelController@edit')->name('admineditmapel.update');
    Route::get('/adminmapeldelete/{mapelID}', [MapelController::class, 'delete']);
    //
    Route::get('/adminaddnilai', function () {return view('tambahnilai');});


    //crud tabel user
    Route::get('/adminuserindex', [UserController::class, 'index'])->name('adminuser.index');
    Route::get('/adminadduser', function () {return view('tambahuser');});
    Route::post('/adminuseradd', [UserController::class, 'store']);
    Route::post('/adminuserupdate/{userID}', [UserController::class, 'update']);
    Route::get('/adminedituser/update/{userID}', [UserController::class, 'edit']);
    Route::get('/adminuserdelete/{userID}', [UserController::class, 'delete']);
    //

    Route::get('/admineditnilai', function () {return view('editnilai');});
    Route::get('/admineditsiswa', function () {return view('editsiswa');});
});
// miscellanous
Route::get('/test', function () {return view('testing');});
Route::get('/backup', function () {return view('backup');});
Route::get('/aboutus', function () {return view('aboutus');});
Route::get('/footer', function () {return view('footer');});
Route::get('/contact', function () {return view('contact');});


