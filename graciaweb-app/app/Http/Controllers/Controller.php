<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\graciaUser;
use App\Models\graciaKelas;

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

    public function indexnilai($nilaiID)
    {
        $class = graciaKelas::with('user')->where('kelasID', $kelasID)->first();
        $user = graciaUser::where('kelasID', $kelasID)->get();

        return view('listmuridguru', compact('class', 'user'));
    }
}
