<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerjaKepala;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProgramKerjaKepalaCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = ProgramKerjaKepala::all();

        return view('halaman_admin.program_kerja_kepala.index', [
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
        return view('halaman_admin.program_kerja_kepala.tambah');
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
            'kode_kegiatan' => 'required|unique:program_kerja_kepala,kode_kegiatan|max:255',
        ]);
        $store = new ProgramKerjaKepala;

        $store->kode_kegiatan = $request->kode_kegiatan;
        $store->nama_kegiatan = $request->nama_kegiatan;
        $store->jenis_perjalanan = $request->jenis_perjalanan;
        $store->nilai = $request->nilai;
        $store->kode_rekening = $request->kode_rekening;

        $store->save();

        Alert::success('Data Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('program_kerja_kepala');
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
        $edit = ProgramKerjaKepala::find($id);
        return view('halaman_admin.program_kerja_kepala.edit', compact('edit'));
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
        $update = ProgramKerjaKepala::find($request->id);

        $update->kode_kegiatan = $request->kode_kegiatan;
        $update->nama_kegiatan = $request->nama_kegiatan;
        $update->jenis_perjalanan = $request->jenis_perjalanan;
        $update->nilai = $request->nilai;
        $update->kode_rekening = $request->kode_rekening;

        $update->save();

        Alert::success('Data Berhasil', 'Data Berhasil diedit');
        return redirect()->route('program_kerja_kepala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ProgramKerjaKepala::find($id);
        $delete->delete();

        Alert::error('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('program_kerja_kepala');
    }
}
