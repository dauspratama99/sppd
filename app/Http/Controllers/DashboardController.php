<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (Auth::check()) {
            if ($user->status == 'admin') {
                return redirect()->intended('admin');
            } else if ($user->status == 'kwitansi') {
                return redirect()->intended('kwitansi');
            } else {
                return redirect()->intended('surat_tugas');
            }
        } else {
            return view('auth.login');
        }
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $proses = $request->only('username', 'password');

        if (Auth::attempt($proses)) {
            $user = Auth::User();

            if ($user->status == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->status == 'kwitansi') {
                return redirect()->intended('kwitansi');
            } elseif ($user->status == 'surat_tugas') {
                return redirect()->intended('surat_tugas');
            }
            return redirect('/');
        }
        return redirect()->route('/');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('/');
    }

    public function dashboard()
    {
        return view('halaman_admin.kelola_akun.dashboard');
    }
}
