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

    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'deskripsi' => 'required',
        ]);

        $kelas = new graciaKelas();
        $kelas->nama_kelas = $request->kelas;
        $kelas->deskripsi = $request->deskripsi;

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
            'deskripsi' => 'required',
        ]);

        graciaKelas::where('kelasID', $kelasID)
        ->update([
            'nama_kelas' => $request->input('nama_kelas'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect('/adminkelasindex')->with('success', 'Data updated successfully');
    }
}