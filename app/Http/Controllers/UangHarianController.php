<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UangHarianController extends Controller
{
    public function index()
    {
        $data = [
            'uang_dalam' => DB::table('uang_harian_dalam')->get(),
            'uang_luar' => DB::table('uang_harian_luar')->get(),
        ];

        return view('halaman_admin.uang_harian.semua_uang_harian', $data);
    }

    public function uang_dalam_edit($id)
    {
        $uang_dalam = DB::table('uang_harian_dalam')->where('id', $id)->first();
        return view('halaman_admin.uang_harian.uang_dalam_edit', compact('uang_dalam'));
    }

    public function uang_dalam_update(Request $request, $id)
    {
        DB::table('uang_harian_dalam')->where('id', $id)->update([
            'harga' => $request->harga
        ]);

        Alert::success('Uang Harian', 'Data Berhasil Diedit');
        return redirect()->route('uang_harian');
    }

    public function uang_luar_edit($id)
    {
        $uang_luar = DB::table('uang_harian_luar')->where('id', $id)->first();
        return view('halaman_admin.uang_harian.uang_luar_edit', compact('uang_luar'));
    }

    public function uang_luar_update(Request $request, $id)
    {
        DB::table('uang_harian_luar')->where('id', $id)->update([
            'harga' => $request->harga
        ]);

        Alert::success('Uang Harian', 'Data Berhasil Diedit');
        return redirect()->route('uang_harian');
    }
}
