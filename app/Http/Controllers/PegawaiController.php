<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\pegawai;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = pegawai::all();
        return view('halaman_admin.pegawai.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('halaman_admin.pegawai.tambah');
    }

    public function ajax()
    {
        if ($_POST['golongan'] == 'IA') {
            $pangkat = "Juru Muda";
        } elseif ($_POST['golongan'] == 'IB') {
            $pangkat = 'Juru Muda Tingkat 1';
        } elseif ($_POST['golongan'] == 'IC') {
            $pangkat = 'juru';
        } elseif ($_POST['golongan'] == 'ID') {
            $pangkat = 'Juru Tingkat 1';
        } elseif ($_POST['golongan'] == 'IIA') {
            $pangkat = 'Pengatur Muda';
        } elseif ($_POST['golongan'] == 'IIB') {
            $pangkat = 'Pengatur Muda Tingkat 1';
        } elseif ($_POST['golongan'] == 'IIC') {
            $pangkat = 'Pengatur';
        } elseif ($_POST['golongan'] == 'IID') {
            $pangkat = 'Pengatur Tingkat 1';
        } elseif ($_POST['golongan'] == 'IIIA') {
            $pangkat = 'Penata Muda';
        } elseif ($_POST['golongan'] == 'IIIB') {
            $pangkat = 'Penata Muda Tingkat 1';
        } elseif ($_POST['golongan'] == 'IIIC') {
            $pangkat = 'Penata';
        } elseif ($_POST['golongan'] == 'IIID') {
            $pangkat = 'Penata Tingkat 1';
        } elseif ($_POST['golongan'] == 'IVA') {
            $pangkat = 'Pembina';
        } elseif ($_POST['golongan'] == 'IVB') {
            $pangkat = 'Pembina Tingkat 1';
        } elseif ($_POST['golongan'] == 'IVC') {
            $pangkat = 'Pembina Utama Muda';
        } elseif ($_POST['golongan'] == 'IVD') {
            $pangkat = 'Pembina Utama Madya';
        } else {
            $pangkat = 'Pembina Utama';
        }

        return response()->json([
            'pangkat' => $pangkat
        ]);
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
            'nama_lengkap' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'golongan' => 'required',
            'pangkat' => 'required',
            'unit' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $photo = $request->file('foto');
        $photo_name = time() . '.' . $photo->extension();
        $photo->move(('gambar'), $photo_name);

        $store = new pegawai;
        $store->nama_lengkap = $request->nama_lengkap;
        $store->nip = $request->nip;
        $store->jabatan = $request->jabatan;
        $store->golongan = $request->golongan;
        $store->pangkat = $request->pangkat;
        $store->unit = $request->unit;
        $store->tingkat_biaya = $request->tingkat_biaya;
        $store->foto = $photo_name;
        $store->save();
        Alert::success('Data Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('kelola_pegawai');
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
        $edit = pegawai::find($id);
        return view('halaman_admin.pegawai.edit', compact('edit'));
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

        $update = pegawai::find($request->id);
        if ($request->foto != Null) {
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            // pemindahan foto ke folder gambar public
            $photo = $request->file('foto');
            $photo_name = time() . '.' . $photo->extension();
            $photo->move(('gambar'), $photo_name);
            // pemindahan foto ke folder gambar public

            $update->nama_lengkap = $request->nama_lengkap;
            $update->nip = $request->nip;
            $update->jabatan = $request->jabatan;
            $update->golongan = $request->golongan;
            $update->pangkat = $request->pangkat;
            $update->unit = $request->unit;
            $update->tingkat_biaya = $request->tingkat_biaya;
            $update->foto = $photo_name;
            $update->save();
        } else {

            $update->nama_lengkap = $request->nama_lengkap;
            $update->nip = $request->nip;
            $update->jabatan = $request->jabatan;
            $update->golongan = $request->golongan;
            $update->pangkat = $request->pangkat;
            $update->unit = $request->unit;
            $update->tingkat_biaya = $request->tingkat_biaya;
            $update->save();
        }
        Alert::success('Data Berhasil', 'Data Berhasil diupdate');
        return redirect()->route('kelola_pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = pegawai::find($id);
        $delete->delete();

        Alert::success('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('kelola_pegawai');
    }
}
