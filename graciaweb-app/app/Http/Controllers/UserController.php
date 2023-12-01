<?php

namespace App\Http\Controllers;

use App\Models\graciaUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = graciaUser::all();
        return view('cruduser', ['users' => $users]);
    }

    public function index2()
    {
        $murid = graciaUser::all();
        return view('crudmurid', ['murid' => $murid]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nis' => 'required',
            'agama' => 'required',
            'nama_orangtua' => 'required',
            'tempat_lahir' => 'required',
            'role' => 'required',
        ]);

        $user = new graciaUser();

        // Mengambil nilai password dari request
        $password = $request->password;

        // Hash password menggunakan password_hash()
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $user->username = $request->username;
        $user->nama_depan = $request->nama_depan;
        $user->nama_belakang = $request->nama_belakang;

        // Simpan hashed password ke objek $user
        $user->password = $hashedPassword;

        $user->gender = $request->gender;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->nis = $request->nis;
        $user->agama = $request->agama;
        $user->nama_orangtua = $request->nama_orangtua;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->role = $request->role;
        $user->kelasID = $request->kelasID;

        $user->save();

        return redirect('/adminuserindex')->with('success', 'Data added successfully');
    }

    public function absensi()
    {
        return $this->morphMany(graciaAbsensi::class, 'absensi');
    }
}
