<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\graciaUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;
use PhpParser\Node\Stmt\Return_;

class SessionController extends Controller
{
        function signin(){
            return view('sesi/signin');
        }

        function login(Request $request)
        {
            FacadesSession::flash('username', $request->username);
            $request->validate([
                'username' => 'required',
                'password' => 'required'
            ], [
                'username.required' => 'username wajib diisi',
                'password.required' => 'password wajib diisi'
            ]);

            $username = $request->username;
            $password = $request->password;

            // Lakukan pencarian pengguna berdasarkan username
            $user = graciaUser::where('username', $username)->first();

            if ($user && Hash::check($password, $user->password)) {
                // Jika kredensial cocok, lakukan proses login berdasarkan peran pengguna
                Auth::login($user); // Melakukan login menggunakan data pengguna yang ditemukan

                if ($user->role === 'admin') {
                    return redirect()->route('adminadmin.listadmin')->with('success', 'Berhasil login sebagai admin');
                } else if ($user->role === 'student') {
                    return redirect()->route('studentstudent.indexmurid')->with('success', 'Berhasil login sebagai siswa');
                } else if ($user->role === 'teacher') {
                    return redirect()->route('teacherteacher.indexguru')->with('success', 'Berhasil login sebagai guru');
                }
            } else {
                // Jika kredensial tidak cocok
                return redirect('/')->withErrors('Username atau password tidak valid');
            }
        }
    function logout(){
        Auth::logout();
        return redirect('/sesi');
    }
}
