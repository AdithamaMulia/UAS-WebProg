<?php

namespace App\Http\Controllers;

use App\Models\graciaAbsensi;
use App\Models\graciaKelas;
use App\Models\graciaUser;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {
        $absen = graciaAbsensi::where('kelasID', $request->kelasID)
            ->whereBetween('tanggal', [$request->tanggal, $request->tanggal]) // Filter by tanggal
            ->get();
        $kelas = graciaKelas::where('kelasID', $request->kelasID)->first();
        return view('absen', compact('absen', 'kelas'));
    }

    public function pilihkapan(Request $request)
    {
        $absensi = graciaAbsensi::where('kelasID', $request->kelasID)
            ->whereBetween('semester', [$request->semester, $request->semester]) // Filter by semester
            ->whereBetween('tanggal', [$request->tanggal, $request->tanggal]) // Filter by tanggal
            ->get();
        $kelas = graciaKelas::where('kelasID', $request->kelasID)->first();
        return view('tanggalsemester', compact('absensi', 'kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'absen' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'userID' => 'required',
            'keterangan' => 'required',
            'semester' => 'required|in:Ganjil,Genap',
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
        foreach ($request->input('absenID') as $absenID) {
            foreach ($request->input('userID') as $userID) {
                $absensi = graciaAbsensi::where('userID', $request->userID)
                    ->where('absenID', $request->absenID)
                    ->first() ?? null;

                if ($absensi) {
                    $absensi->update([
                        'keterangan' => $request->input('keterangan')[$absenID],
                    ]);
                } else {
                    $absensi = new graciaAbsensi();
                    $absensi->userID = $userID;
                    $absensi->keterangan = $request->input('keterangan')[$userID] ?? null;
                    $absensi->tanggal = $request->input('tanggal');
                    $absensi->kelasID = $request->input('kelasID');
                    $absensi->semester = $request->input('semester');
                    $absensi->save(); 
                }
            }        
        }
        return redirect('teacher/setelahabsen/' . $request->kelasID)->with('success', 'Data updated successfully');
    }
}
