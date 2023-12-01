<?php

namespace App\Http\Controllers;

use App\Models\graciaKelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $classes = graciaKelas::all();
        return view('crudkelas', ['classes' => $classes]);
    }

    public function indexutkguru()
    {
        $class = graciaKelas::all();
        return view('kelas', ['class' => $class]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'tingkat' => 'required',
        ]);

        $kelas = new graciaKelas();
        $kelas->nama_kelas = $request->kelas;
        $kelas->deskripsi = $request->deskripsi;
        $kelas->tingkat = $request->tingkat;

        $kelas->save();

        return redirect('/adminkelasindex')->with('success', 'Data added successfully');
    }

    public function edit($kelasID)
    {
        $classes = graciaKelas::where('kelasID', $kelasID)->first();
        return view('editkelas', ['class' => $classes]);
    }


    public function update(Request $request, $kelasID)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'tingkat' => 'required',
        ]);

        graciaKelas::where('kelasID', $kelasID)
        ->update([
            'nama_kelas' => $request->input('nama_kelas'),
            'deskripsi' => $request->input('deskripsi'),
            'tingkat' => $request->input('tingkat'),
        ]);

        return redirect('/adminkelasindex')->with('success', 'Data updated successfully');
    }

    public function showTabelKelasSiswa($kelasID)
    {
        // Lakukan operasi yang diperlukan untuk menampilkan tabel kelas siswa
        // Misalnya, ambil data kelas berdasarkan $kelasID

        // Contoh:
        $kelas = graciaKelas::findOrFail($kelasID); // Menggunakan model Kelas, ganti dengan nama model yang sesuai

        // Kirim data ke view tabelkelasiswa.blade.php
        return view('crudmurid', compact('kelas'));
    }
}
