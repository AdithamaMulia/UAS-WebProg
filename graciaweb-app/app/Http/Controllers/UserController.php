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
            'email' => 'required|email',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'role' => 'required',
        ]);

        $user = new graciaUser();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->nama_depan = $request->nama_depan;
        $user->nama_belakang = $request->nama_belakang;
        $user->password = $request->password;
        $user->gender = $request->gender;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->nik = $request->nik;
        $user->role = $request->role;

        $user->save();

        return redirect('/adminpage8')->with('success', 'Data added successfully');
    }
}