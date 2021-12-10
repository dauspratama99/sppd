<?php

namespace App\Http\Controllers;

use App\Models\Surat_tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\suratRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class SuratTugasController extends Controller
{
    public function index()
    {
        if(Auth::user()->status != 'admin'){
        $index = DB::table('surat_tugas')
            ->join('tanda_tangan_dokumen', 'surat_tugas.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas.*')
            ->where('id_user', Auth::user()->id)
            ->get();
        }else {
            $index = DB::table('surat_tugas')
            ->join('tanda_tangan_dokumen', 'surat_tugas.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas.*')
            ->get();
        }

        return view('halaman_admin.entry_surat_tugas.index', compact('index'));
    }

    public function cetak()
    {
        if(Auth::user()->status !='admin'){
        $index = DB::table('surat_tugas')
            ->join('tanda_tangan_dokumen', 'surat_tugas.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas.*')
            ->where('id_user', Auth::user()->id)
            ->get();
        }else{
            $index = DB::table('surat_tugas')
            ->join('tanda_tangan_dokumen', 'surat_tugas.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas.*')
            ->get();
        }
        return view('halaman_admin.cetak_surat_tugas.index', compact('index'));
    }

    public function create()
    {
        return view('halaman_admin.entry_surat_tugas.tambah');
    }

    public function store(suratRequest $request)
    {
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $store = new Surat_tugas;

        $store->no_surat_tugas = $request->no_surat_tugas . "" . $request->no_surat_tugas2;
        $store->tanggal = $request->tanggal;
        $store->tanggal_berangkat = $request->tanggal_berangkat;
        $store->tanggal_kembali = $request->tanggal_kembali;
        $store->selama = $l->d;
        $store->alat_angkutan = $request->alat_angkutan;
        $store->tempat_berangkat = $request->tempat_berangkat;
        $store->tempat_tujuan = $request->tempat_tujuan;
        $store->dasar_surat = $request->dasar_surat;
        $store->uraian = $request->uraian;
        $store->sumber_anggaran = $request->sumber_anggaran;
        $store->mulai_berlaku = $request->mulai_berlaku;
        $store->tanda_tangan_dokumen_id = $request->tanda_tangan_dokumen_id;
        $store->id_user = Auth::user()->id;

        $store->save();
        Alert::success('Data Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('kelola_surattugas');
    }

    public function edit($id)
    {
        $edit = DB::table('surat_tugas')
            ->join('tanda_tangan_dokumen', 'surat_tugas.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->where('surat_tugas.id', $id)
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'tanda_tangan_dokumen.id as id_dokumen', 'surat_tugas.*')
            ->first();

        $no_tugas = $edit->no_surat_tugas;
        $edit->surat_tugas = explode("/", $no_tugas)[0];

        return view('halaman_admin.entry_surat_tugas.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $update = Surat_tugas::find($request->id);

        $update->no_surat_tugas = $request->no_surat_tugas . "" . $request->no_surat_tugas2;
        $update->tanggal = $request->tanggal;
        $update->tanggal_berangkat = $request->tanggal_berangkat;
        $update->tanggal_kembali = $request->tanggal_kembali;
        $update->selama = $l->d;
        $update->alat_angkutan = $request->alat_angkutan;
        $update->tempat_berangkat = $request->tempat_berangkat;
        $update->tempat_tujuan = $request->tempat_tujuan;
        $update->dasar_surat = $request->dasar_surat;
        $update->uraian = $request->uraian;
        $update->sumber_anggaran = $request->sumber_anggaran;
        $update->mulai_berlaku = $request->mulai_berlaku;
        $update->tanda_tangan_dokumen_id = $request->tanda_tangan_dokumen_id;

        $update->save();
        Alert::success('Data Berhasil', 'Data Berhasil diedit');
        return redirect()->route('kelola_surattugas');
    }

    public function delete($id)
    {
        $del = Surat_tugas::find($id);
        $del2 = DB::table('detail_surat')->where('surat_tugas_id', $id);
        $del->delete();
        $del2->delete();

        Alert::success('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('kelola_surattugas');
    }
}
