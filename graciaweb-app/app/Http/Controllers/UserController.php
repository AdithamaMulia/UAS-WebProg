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

    public function kelas()
    {
        return $this->hasOne(graciaKelas::class, 'kelasID', 'kelasID');
    }

    protected function isUsernameTaken($username)
    {
        return graciaUser::where('username', $username)->exists();
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

        $inputUsername = $request->input('username');

        if ($this->isUsernameTaken($inputUsername)) {
            return redirect()->back()->with('error', 'Username is already taken.');
        }

        $user->save();

        return redirect('/adminuserindex')->with('success', 'Data added successfully');
    }

    public function edit($userID)
    {
        $user = graciaUser::where('userID', $userID)->first();
        return view('edituser', ['user' => $user]);
    }

    public function update(Request $request, $userID)
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

        graciaUser::where('userID', $userID)
        ->update([
            'username' => $request->input('username'),
            'nama_depan' => $request->input('nama_depan'),
            'nama_belakang' => $request->input('nama_belakang'),
            'password' => $request->input('password'),
            'gender' => $request->input('gender'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'nis' => $request->input('nis'),
            'agama' => $request->input('agama'),
            'nama_orangtua' => $request->input('nama_orangtua'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'role' => $request->input('role'),
            'kelasID' => $request->input('kelasID'),
        ]);

        return redirect('/adminuserindex')->with('success', 'Data updated successfully');
    }

    public function absensi()
    {
        return $this->morphMany(graciaAbsensi::class, 'absensi');
    }
}
