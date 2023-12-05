<?php

namespace App\Http\Controllers;

use App\Models\graciaKelas;
use App\Models\graciaUser;
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


    public function pilihan($kelasID)
    {
        $class = graciaKelas::where('kelasID', $kelasID)->first();
        return view('pilihan', ['class' => $class]);
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

        return redirect('/admin/adminkelasindex')->with('success', 'Data added successfully');
    }

    public function edit($kelasID)
    {
        $classes = graciaKelas::where('kelasID', $kelasID)->first();
        return view('editkelas', ['class' => $classes]);
    }

    public function user()
    {
        return $this->hasOne(graciaUser::class, 'kelasID', 'kelasID');
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

        return redirect('/admin/adminkelasindex')->with('success', 'Data updated successfully');
    }

    public function delete($kelasID) {
        // Temukan data yang akan dihapus
        $class = graciaKelas::find($kelasID);

        if (!$class) {
            // Handle jika data tidak ditemukan
            return redirect('admin/adminkelasindex');
        }

        // Lakukan proses penghapusan data
        $class->delete();

        // Redirect dengan pesan sukses
        return redirect('admin/adminkelasindex');
    }

    public function showTabelKelasSiswa($kelasID)
    {
        // Ambil data kelas berdasarkan $kelasID
        $kelas = graciaKelas::findOrFail($kelasID);

        // Ambil siswa dari kelas
        $siswa = $kelas->siswa; // Mendapatkan siswa dari relasi yang telah didefinisikan

        $kelas = graciaKelas::all();
        $siswa = graciaUser::all();
        // Kirim data ke view crudmurid.blade.php dengan variabel $siswa
        return view('crudmurid', compact('kelasID','siswa','kelas'));
    }

}
