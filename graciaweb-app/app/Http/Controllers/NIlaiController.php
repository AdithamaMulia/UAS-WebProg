<?php

namespace App\Http\Controllers;

use App\Models\graciaNilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = graciaNilai::all();
        return view('crudnilai', ['nilais' => $nilais]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'deskripsi' => 'required',
        ]);

        $kelas = new graciaNilai();
        $kelas->nama_kelas = $request->kelas;
        $kelas->deskripsi = $request->deskripsi;

        $kelas->save();

        return redirect('/adminkelasindex')->with('success', 'Data added successfully');
    }

    public function edit($kelasID)
    {
        $nilais = graciaNilai::where('kelasID', $kelasID)->first();
        return view('editkelas', ['class' => $nilais]);
    }


    public function update(Request $request, $kelasID)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'deskripsi' => 'required',
        ]);

        graciaNilai::where('kelasID', $kelasID)
        ->update([
            'nama_kelas' => $request->input('nama_kelas'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect('/adminkelasindex')->with('success', 'Data updated successfully');
    }
}