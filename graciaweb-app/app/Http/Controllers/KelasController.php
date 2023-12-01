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
        // Ambil data kelas berdasarkan $kelasID
        $kelas = graciaKelas::findOrFail($kelasID);

        // Ambil siswa dari kelas
        $siswa = $kelas->siswa; // Mendapatkan siswa dari relasi yang telah didefinisikan

        // Kirim data ke view crudmurid.blade.php dengan variabel $siswa
        return view('crudmurid', compact('siswa'));
    }

    public function absensi()
    {
        return $this->hasMany(graciaAbsensi::class);
    }

}
