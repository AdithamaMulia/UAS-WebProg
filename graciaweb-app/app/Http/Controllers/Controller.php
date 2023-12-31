<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\graciaUser;
use App\Models\graciaKelas;
use App\Models\graciaNilai;
use App\Models\graciaMapel;
use App\Models\graciaAbsensi;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function indexabsen($kelasID)
    {
        $kelas = graciaKelas::with('absensi')->where('kelasID', $kelasID)->first();
        $absen = graciaAbsensi::where('kelasID', $kelasID)->first();

        if (!$kelas) {
            abort(404);
        }
        $users = graciaUser::with(['absensi' => function ($query) use ($kelasID) {
            $query->where('kelasID', $kelasID);
        }])->where('kelasID', $kelasID)->get();

        return view('absen', ['users' => $users, 'kelas' => $kelas, 'absen' => $absen]);
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
