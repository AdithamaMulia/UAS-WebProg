<?php

namespace App\Http\Controllers;

use App\Models\graciaUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = graciaUser::all();
        return view('cruduser', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nis' => 'required',
            'agama' => 'required',
            'nama_orangtua' => 'required',
            'tempat_lahir' => 'required',
            'role' => 'required',
        ]);

        $user = new graciaUser();
        $user->username = $request->username;
        $user->nama_depan = $request->nama_depan;
        $user->nama_belakang = $request->nama_belakang;
        $user->password = $request->password;
        $user->gender = $request->gender;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->nis = $request->nis;
        $user->agama = $request->agama;
        $user->nama_orangtua = $request->nama_orangtua;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->role = $request->role;

        $user->save();

        return redirect('/adminuserindex')->with('success', 'Data added successfully');
    }

    public function edit($userID)
    {
        $user = graciaUser::where('userID', $userID)->first();
        return view('edituser', ['users' => $user]);
    }

    public function update(Request $request, $userID)
    {
        $request->validate([
            'username' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nis' => 'required',
            'agama' => 'required',
            'nama_orangtua' => 'required',
            'tempat_lahir' => 'required',
            'role' => 'required',
        ]);

        graciaKelas::where('userID', $userID)
        ->update([
            'username' => $request->input('username'),
            'nama_depan' => $request->input('nama_depan'),
            'nama_belakang' => $request->input('nama_belakang'),
            'password' => $request->input('password'),
            'gender' => $request->input('gender'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'nis' => $request->input('nis'),
            'agama' => $request->input('agama'),
            'nama_orangtua' => $request->input('nama_orangtua'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'role' => $request->input('role'),
        ]);

        return redirect('/adminmapelindex')->with('success', 'Data updated successfully');
    }
}