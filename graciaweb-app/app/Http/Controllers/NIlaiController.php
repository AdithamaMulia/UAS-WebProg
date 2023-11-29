<?php

namespace App\Http\Controllers;

use App\Models\graciaNilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'userID' => 'required',
        'mapelID' => 'required',
        'nilaiUTS' => 'nullable|numeric',
        'nilaiUAS' => 'nullable|numeric',
        'nilaiUH1' => 'nullable|numeric',
        'nilaiUH2' => 'nullable|numeric',
        'nilaiUH3' => 'nullable|numeric',
        'nilaiUH4' => 'nullable|numeric',
        'nilaiAkhir' => 'nullable|numeric',
        'semester' => 'required|in:Ganjil,Genap',
    ]);

    $nilai = new Nilai();
    $nilai->userID = $request->userID;
    $nilai->mapelID = $request->mapelID;
    $nilai->nilaiUTS = $request->nilaiUTS;
    $nilai->nilaiUAS = $request->nilaiUAS;
    $nilai->nilaiUH1 = $request->nilaiUH1;
    $nilai->nilaiUH2 = $request->nilaiUH2;
    $nilai->nilaiUH3 = $request->nilaiUH3;
    $nilai->nilaiUH4 = $request->nilaiUH4;
    $nilai->nilaiAkhir = $request->nilaiAkhir;
    $nilai->semester = $request->semester;
    $nilai->save();

    return redirect('/nilai')->with('success', 'Data added successfully');
}

public function update(Request $request, $nilaiID)
{
    $request->validate([
        'userID' => 'required',
        'mapelID' => 'required',
        'nilaiUTS' => 'nullable|numeric',
        'nilaiUAS' => 'nullable|numeric',
        'nilaiUH1' => 'nullable|numeric',
        'nilaiUH2' => 'nullable|numeric',
        'nilaiUH3' => 'nullable|numeric',
        'nilaiUH4' => 'nullable|numeric',
        'nilaiAkhir' => 'nullable|numeric',
        'semester' => 'required|in:Ganjil,Genap',
    ]);

    Nilai::where('nilaiID', $nilaiID)
        ->update([
            'userID' => $request->input('userID'),
            'mapelID' => $request->input('mapelID'),
            'nilaiUTS' => $request->input('nilaiUTS'),
            'nilaiUAS' => $request->input('nilaiUAS'),
            'nilaiUH1' => $request->input('nilaiUH1'),
            'nilaiUH2' => $request->input('nilaiUH2'),
            'nilaiUH3' => $request->input('nilaiUH3'),
            'nilaiUH4' => $request->input('nilaiUH4'),
            'nilaiAkhir' => $request->input('nilaiAkhir'),
            'semester' => $request->input('semester'),
        ]);

    return redirect('/nilai')->with('success', 'Data updated successfully');
}

}