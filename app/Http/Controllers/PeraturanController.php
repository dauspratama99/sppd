<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PeraturanController extends Controller
{

    public function index()
    {
        $index = Peraturan::all();
        return view('halaman_admin.dasar_peraturan.index', compact('index'));
    }

    public function edit($id)
    {
        $edit = Peraturan::find($id);
        return view('halaman_admin.dasar_peraturan.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Peraturan::find($request->id);
        $update->kategori = $request->kategori;
        $update->deskripsi = $request->deskripsi;

        $update->save();

        Alert::success('Data Berhasil', 'Data Berhasil diedit');
        return redirect()->route('kelola_peraturan');
    }

    public function destroy($id)
    {
        $delete = Peraturan::find($id);

        $delete->delete();

        Alert::success('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('kelola_peraturan');
    }
}
