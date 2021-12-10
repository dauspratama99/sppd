<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class BiayaRepresentasiController extends Controller
{
    public function biaya_represantasi()
    {
        $biaya = DB::table('biaya_representasi')->get();

        return view('halaman_admin.biaya_representasi.representasi', compact('biaya'));
    }

    public function represantasi_edit($id)
    {
        $edit = DB::table('biaya_representasi')->where('id', $id)->first();
        return view('halaman_admin.biaya_representasi.representasi_edit', compact('edit'));
    }

    public function represantasi_update(Request $request, $id)
    {
        $update = DB::table('biaya_representasi')->where('id', $id)->update([
            'luar_daerah' => $request->luar_daerah,
            'dalam_daerah' => $request->dalam_daerah,
        ]);

        Alert::success('Biaya Representasi Success', 'Data Berhasil Diedit');
        return redirect()->route('biaya_represantasi');
    }
}
