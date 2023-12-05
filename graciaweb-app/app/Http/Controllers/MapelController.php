<?php

namespace App\Http\Controllers;

use App\Models\graciaMapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = graciaMapel::all();
        return view('crudmapel', ['mapel' => $mapel]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required',
        ]);

        $mapel = new graciaMapel();
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->tingkat = $request->tingkat;

        $mapel->save();

        return redirect('/admin/adminmapelindex')->with('success', 'Data added successfully');
    }

    public function edit($mapelID)
    {
        $mapels = graciaMapel::where('mapelID', $mapelID)->first();
        return view('editmapel', ['mapel' => $mapels]);
    }

    public function update(Request $request, $mapelID)
    {
        $request->validate([
            'nama_mapel' => 'required',
            'tingkat' => 'required',
        ]);

        graciaMapel::where('mapelID', $mapelID)
        ->update([
            'nama_mapel' => $request->input('nama_mapel'),
            'tingkat' => $request->input('tingkat'),
        ]);

        return redirect('/admin/adminmapelindex')->with('success', 'Data updated successfully');
    }

    public function delete($mapelID) {
        // Temukan data yang akan dihapus
        $mapel = graciaMapel::find($mapelID);

        if (!$mapel) {
            // Handle jika data tidak ditemukan
            return redirect('admin/adminmapelindex');
        }

        // Lakukan proses penghapusan data
        $mapel->delete();

        // Redirect dengan pesan sukses
        return redirect('admin/adminmapelindex');
    }
}
