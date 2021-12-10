<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProgramKerjaCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = ProgramKerja::all();

        return view('halaman_admin.program_kerja.index', [
            "index" => $index
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman_admin.program_kerja.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kegiatan' => 'required|unique:program_kerja,kode_kegiatan|max:255',
        ]);
        $store = new ProgramKerja;

        $store->kode_kegiatan = $request->kode_kegiatan;
        $store->nama_kegiatan = $request->nama_kegiatan;
        $store->jenis_perjalanan = $request->jenis_perjalanan;
        $store->nilai = $request->nilai;
        $store->kode_rekening = $request->kode_rekening;

        $store->save();

        Alert::success('Data Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('program_kerja');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = ProgramKerja::find($id);
        return view('halaman_admin.program_kerja.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = ProgramKerja::find($request->id);

        $update->kode_kegiatan = $request->kode_kegiatan;
        $update->nama_kegiatan = $request->nama_kegiatan;
        $update->jenis_perjalanan = $request->jenis_perjalanan;
        $update->nilai = $request->nilai;
        $update->kode_rekening = $request->kode_rekening;

        $update->save();

        Alert::success('Data Berhasil', 'Data Berhasil diedit');
        return redirect()->route('program_kerja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ProgramKerja::find($id);
        $delete->delete();

        Alert::error('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('program_kerja');
    }
}
