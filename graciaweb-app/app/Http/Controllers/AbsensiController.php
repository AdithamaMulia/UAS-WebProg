<?php

namespace App\Http\Controllers;

use App\Models\graciaAbsen;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $classes = graciaAbsen::all();
        return view('crudabsen', ['absen' => $absen]);
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

        $absen = new graciaAbsen();
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

        $absen = graciaabsen::find($id);

        $absen->userID = $request->userID;
        $absen->tanggal = $request->tanggal;
        $absen->userID = $request->userID;
        $absen->keterangan = $request->keterangan;

        $absen->save();

        return redirect('/adminabsen')->with('success', 'Data updated successfully');
    }
}