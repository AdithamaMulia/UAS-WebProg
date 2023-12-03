<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\graciaUser;
use App\Models\graciaKelas;
use App\Models\graciaNilai;
use App\Models\graciaMapel;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function indexabsen()
    {
        $users = graciaUser::with('absensi')->get();
        $kelas = graciaKelas::with('absensi')->get();

        return view('absen', ['users' => $users, 'kelas' => $kelas]);
    }

    public function filtered($kelasID)
    {
        $class = graciaKelas::with('user')->where('kelasID', $kelasID)->first();
        $user = graciaUser::where('kelasID', $kelasID)->get();

        return view('listmuridguru', compact('class', 'user'));
    }

    public function indexnilai($userID, $kelasID)
    {
        $nilai = graciaNilai::where('userID', $userID)->get();
        $class = graciaKelas::where('kelasID', $kelasID)->first();
        $user = graciaUser::with('nilai')->where('userID', $userID)->first();
        $mapel = graciaMapel::all();

        return view('nilai', compact('class', 'user', 'nilai', 'mapel'));
    }

    public function editnilai($userID, $mapelID)
    {
        $user = graciaUser::with('nilai.mapel', 'kelas')->where('userID', $userID)->first();
        $mapel = graciaMapel::findOrFail($mapelID);

        return view('nilai_edit', compact('user', 'mapel'));
    }
}
