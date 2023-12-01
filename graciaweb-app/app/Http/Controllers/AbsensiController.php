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

        return redirect('/absen')->with('success', 'Data added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'absen' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'userID' => 'required',
            'keterangan' => 'required',
            'semester' => 'required|in:Ganjil,Genap',
        ]);

        $absen = graciaAbsensi::find($id);

        $absen->userID = $request->userID;
        $absen->tanggal = $request->tanggal;
        $absen->userID = $request->userID;
        $absen->semester = $request->semester;
        $absen->keterangan = $request->keterangan;

        $absen->save();

        return redirect('/absen')->with('success', 'Data updated successfully');
    }

    public function submitAbsen(Request $request)
    {
        foreach ($request->input('user_ids') as $userID) {
            $absensi = new graciaAbsensi();
            $absensi->userID = $userID;
            $absensi->keterangan = $request->input('remember')[$userID] ?? null;
            $absensi->keterangan = $request->input('keterangan')[$userID] ?? null;
            $absensi->tanggal = $request->input('tanggal');
            $absensi->kelasID = $request->input('kelas');
            $absensi->semester = $request->input('semester');

            $absensi->save();
        }
        return redirect('/absen')->with('success', 'Data updated successfully');
    }
}