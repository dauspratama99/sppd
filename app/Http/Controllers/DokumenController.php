<?php

namespace App\Http\Controllers;

use App\Models\dokumen;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = dokumen::all();
        return view('halaman_admin.dokument.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman_admin.dokument.tambah');
    }

    public function ajax()
    {
        if ($_POST['document'] == 'IA') {
            $pangkat = "Juru Muda";
        } elseif ($_POST['document'] == 'IB') {
            $pangkat = 'Juru Muda Tingkat 1';
        } elseif ($_POST['document'] == 'IC') {
            $pangkat = 'juru';
        } elseif ($_POST['document'] == 'ID') {
            $pangkat = 'Juru Tingkat 1';
        } elseif ($_POST['document'] == 'IIA') {
            $pangkat = 'Pengatur Muda';
        } elseif ($_POST['document'] == 'IIB') {
            $pangkat = 'Pengatur Muda Tingkat 1';
        } elseif ($_POST['document'] == 'IIC') {
            $pangkat = 'Pengatur';
        } elseif ($_POST['document'] == 'IID') {
            $pangkat = 'Pengatur Tingkat 1';
        } elseif ($_POST['document'] == 'IIIA') {
            $pangkat = 'Penata Muda';
        } elseif ($_POST['document'] == 'IIIB') {
            $pangkat = 'Penata Muda Tingkat 1';
        } elseif ($_POST['document'] == 'IIIC') {
            $pangkat = 'Penata';
        } elseif ($_POST['document'] == 'IIID') {
            $pangkat = 'Penata Tingkat 1';
        } elseif ($_POST['document'] == 'IVA') {
            $pangkat = 'Pembina';
        } elseif ($_POST['document'] == 'IVB') {
            $pangkat = 'Pembina Tingkat 1';
        } elseif ($_POST['document'] == 'IVC') {
            $pangkat = 'Pembina Utama Muda';
        } elseif ($_POST['document'] == 'IVD') {
            $pangkat = 'Pembina Utama Madya';
        } elseif ($_POST['document'] == 'IVD') {
            $pangkat = 'Pembina Utama';
        }

        // echo json_encode($pangkat);

        return response()->json([
            'pangkat' => $pangkat,
        ]);
    }
    public function store(Request $request)
    {
        $store = new dokumen;
        $store->nama_lengkap = $request->nama_lengkap;
        $store->nip = $request->nip;
        $store->jabatan = $request->jabatan;
        $store->golongan = $request->golongan;
        $store->pangkat = $request->pangkat;
        $store->status_jabatan = $request->status_jabatan;
        $store->save();

        Alert::success('Data Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('kelola_dokument');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = dokumen::find($id);
        return view('halaman_admin.dokument.edit', compact('edit'));
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
        $update = dokumen::find($request->id);
        $update->nama_lengkap = $request->nama_lengkap;
        $update->nip = $request->nip;
        $update->jabatan = $request->jabatan;
        $update->golongan = $request->golongan;
        $update->status_jabatan = $request->status_jabatan;
        $update->save();

        Alert::success('Data Berhasil', 'Data Berhasil diedit');
        return redirect()->route('kelola_dokument');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = dokumen::find($id);
        $delete->delete();

        Alert::success('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('kelola_dokument');
    }
}
