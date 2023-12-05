<?php

namespace App\Http\Controllers;

use App\Models\graciaUser;
use App\Models\graciaKelas;
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

    protected function isNISTaken($nis)
    {
        return graciaUser::where('nis', $nis)->exists();
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
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'role' => 'required',
            'nis' => 'required',
            'nama_orangtua' => 'required',
        ]);

        $inputUsername = $request->username;

        if ($this->isUsernameTaken($inputUsername)) {
            return redirect()->back()->with('error', 'Username is already taken.');
        }

        $inputNis = $request->nis;

        if ($this->isNISTaken($inputNis)) {
            return redirect()->back()->with('error', 'NIS is already taken.');
        }

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

        return redirect('/admin/adminuserindex')->with('success', 'Data added successfully');
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
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'role' => 'required',
            'nis' => 'required',
            'nama_orangtua' => 'required',
        ]);

        $user = graciaUser::where('userID', $userID)->first();

        if (!$user) {
            return redirect('admin/adminuserindex')->with('error', 'User not found');
        }

        $user->update([
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

        return redirect('admin/adminuserindex')->with('success', 'Data updated successfully');
    }

    public function delete($userID) {
        // Temukan data yang akan dihapus
        $user = graciaUser::find($userID);

        if (!$user) {
            // Handle jika data tidak ditemukan
            return redirect('admin/adminuserindex');
        }

        // Lakukan proses penghapusan data
        $user->delete();

        // Redirect dengan pesan sukses
        return redirect('admin/adminuserindex');
    }

    public function absensi()
    {
        return $this->morphMany(graciaAbsensi::class, 'absensi');
    }

    public function siswa()
    {
        return $this->morphMany(graciaAbsensi::class, 'siswa');
    }

    public function addtoclass($kelasID)
    {
        // Mendapatkan userID dari graciaUser yang kelasID-nya null
        $user = graciaUser::whereNull('kelasID')->get();

        // Mendapatkan kelas dari graciaKelas sesuai kelasID yang diterima dari URL
        $kelas = graciaKelas::where('kelasID', $kelasID)->first();

        return view('tambahsiswa', ['user' => $user, 'kelas' => $kelas]);
    }



    public function addUserToClass(Request $request, $kelasID)
    {
        // Ambil userID dari input form
        $userID = $request->input('userID');

        // Ambil user yang dipilih
        $user = graciaUser::find($userID);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Tambahkan user ke dalam kelas
        $user->kelasID = $kelasID;
        $user->save();

        return redirect('/admin/adminkelasindex')->with('success', 'User added to class successfully');
    }



}
