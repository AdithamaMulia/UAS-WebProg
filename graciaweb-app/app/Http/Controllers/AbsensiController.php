<?php

namespace App\Http\Controllers;

use App\Models\graciaAbsensi;
use App\Models\graciaKelas;
use App\Models\graciaUser;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index($kelasID)
    {
        $absensi = graciaAbsensi::where('kelasID', $kelasID);
        $kelas = graciaKelas::where('kelasID', $kelasID)->first();
        return view('absen', compact('absensi', 'kelas'));
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

    public function submitAbsen(Request $request, $kelasID)
    {
        foreach ($request->input('userID') as $userID) {
            $absensi = new graciaAbsensi();
            $absensi->userID = $userID;
            $absensi->keterangan = $request->input('keterangan')[$userID] ?? null;
            $absensi->tanggal = $request->input('tanggal');
            $absensi->kelasID = $request->input('kelas');
            $absensi->semester = $request->input('semester');
            $absensi->kelasID = $kelasID;

            $absensi->save();
        }

        return redirect('/absen/' . $request->input('kelasID'))->with('success', 'Data updated successfully');
    }
}
