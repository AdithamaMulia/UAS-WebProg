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

        return redirect('/adminpage2')->with('success', 'Data added successfully');
    }
}