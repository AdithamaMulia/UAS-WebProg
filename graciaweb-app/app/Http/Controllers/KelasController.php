<?php

namespace App\Http\Controllers;

use App\Models\graciaKelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    protected $primarykey = 'kelasID';
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

        return redirect('/adminkelas')->with('success', 'Data added successfully');
    }

    public function edit($kelasID)
    {
        $classes = graciaKelas::find($kelasID);
        return view('editkelas', ['classes' => $classes]);
    }


    public function update(Request $request, $kelasID)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'deskripsi' => 'required',
        ]);

        $kelas = graciaKelas::find($kelasID);

        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->deskripsi = $request->deskripsi;

        $kelas->save();

        return redirect('/adminkelas')->with('success', 'Data updated successfully');
    }
}