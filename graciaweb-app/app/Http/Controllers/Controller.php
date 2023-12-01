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
        $murid = graciaUser::with('absensiRecords')->get();
        $kelas = graciaKelas::with('absensiRecords')->get();

        return view('absen', ['murid' => $murid, 'kelas' => $kelas]);
    }
}
