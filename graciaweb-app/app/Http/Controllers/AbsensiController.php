<?php

namespace App\Http\Controllers;

use App\Models\graciaAbsen;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $classes = graciaAbsen::all();
        return view('crudAbsen', ['absen' => $absen]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'absen' => 'required',
            'deskripsi' => 'required',
        ]);

        $absensi = new graciaabsen();
        $absen->nama_absen = $request->absen;
        $absen->deskripsi = $request->deskripsi;

        $absen->save();

        return redirect('/adminpage2')->with('success', 'Data added successfully');
    }
}