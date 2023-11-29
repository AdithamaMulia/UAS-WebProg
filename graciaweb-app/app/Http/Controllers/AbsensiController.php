<?php

namespace App\Http\Controllers;

use App\Models\graciaAbsensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = graciaAbsensi::all();
        return view('crudabsen', ['absensi' => $absensi]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'absen' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'userID' => 'required',
            'keterangan' => 'required',
        ]);

        $absen = new graciaAbsensi();
        $absen->userID = $request->userID;
        $absen->tanggal = $request->tanggal;
        $absen->userID = $request->userID;
        $absen->keterangan = $request->keterangan;

        $absen->save();

        return redirect('/adminabsen')->with('success', 'Data added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'absen' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'userID' => 'required',
            'keterangan' => 'required',
        ]);

        $absen = graciaabsensi::find($id);

        $absen->userID = $request->userID;
        $absen->tanggal = $request->tanggal;
        $absen->userID = $request->userID;
        $absen->keterangan = $request->keterangan;

        $absen->save();

        return redirect('/adminabsen')->with('success', 'Data updated successfully');
    }
}