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
        $mapel->nama_mapel = $request->mapel;

        $mapel->save();

        return redirect('/adminmapel')->with('success', 'Data added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mapel' => 'required',
            'userID' => 'required',
        ]);

        $mapel = graciaMapel::find($id);

        $mapel->nama_mapel = $request->mapel;
        $mapel->userID = $request->userID;

        $mapel->save();

        return redirect('/adminmapel')->with('success', 'Data updated successfully');
    }
}