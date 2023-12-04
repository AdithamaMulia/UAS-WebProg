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

    public function siswa()
    {
        return $this->morphMany(graciaAbsensi::class, 'siswa');
    }

    public function addUserToClass(Request $request, $userID)
    {
        // Ambil data user berdasarkan ID yang diberikan
        $user = graciaUser::find($userID);

        if (!$user) {
            // Jika user tidak ditemukan, kembalikan pesan error atau response yang sesuai
            return response()->json(['message' => 'User not found'], 404);
        }

        // Ambil data kelas yang dikirimkan dalam request
        $kelasID = $request->input('kelasID');
        $kelas = graciaKelas::find($kelasID);

        if (!$kelas) {
            // Jika kelas tidak ditemukan, kembalikan pesan error atau response yang sesuai
            return response()->json(['message' => 'Class not found'], 404);
        }

        // Tambahkan user ke dalam kelas dengan menggunakan relasi yang ada (contoh: relasi many-to-many)
        $user->kelas()->attach($kelasID);

        // Jika Anda ingin memberikan pesan berhasil, Anda dapat mengembalikan response sukses
        // return response()->json(['message' => 'User added to class successfully'], 200);

        // Ambil ulang data kelas setelah user ditambahkan
        $kelas = graciaKelas::findOrFail($kelasID);

        // Anda dapat menyesuaikan data apa yang ingin Anda tampilkan di view 'crudmurid'
        $siswa = $user; // Misalnya, Anda ingin menampilkan data user yang ditambahkan ke kelas
        // Namun, pastikan Anda sudah memiliki variabel $siswa yang sesuai dengan kebutuhan

        return view('tambahsiswa', compact('kelasID', 'siswa', 'kelas'));
    }


}
