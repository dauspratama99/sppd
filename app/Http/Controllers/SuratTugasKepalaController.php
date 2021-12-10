<?php

namespace App\Http\Controllers;

use App\Models\SuratTugasKepala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\suratRequestKepala;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class SuratTugasKepalaController extends Controller
{
    public function index()
    {
        if(Auth::user()->status != 'admin'){
            $index = DB::table('surat_tugas_kepala')
            ->join('tanda_tangan_dokumen', 'surat_tugas_kepala.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->join('kepala_dinas', 'surat_tugas_kepala.nip', '=', 'kepala_dinas.nip')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas_kepala.*', 'kepala_dinas.*', 'surat_tugas_kepala.id as id_surat_tugas')
            ->where('id_user', Auth::user()->id)
            ->get();
        }else{
        $index = DB::table('surat_tugas_kepala')
            ->join('tanda_tangan_dokumen', 'surat_tugas_kepala.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->join('kepala_dinas', 'surat_tugas_kepala.nip', '=', 'kepala_dinas.nip')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas_kepala.*', 'kepala_dinas.*', 'surat_tugas_kepala.id as id_surat_tugas')
            ->get();
        }
        return view('halaman_admin.entry_surat_tugas_kepala.index', compact('index'));
    }

    public function cetak()
    {
        if(Auth::user()->status != 'admin'){
        $index = DB::table('surat_tugas_kepala')
            ->join('tanda_tangan_dokumen', 'surat_tugas_kepala.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->join('kepala_dinas', 'surat_tugas_kepala.nip', '=', 'kepala_dinas.nip')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas_kepala.*', 'kepala_dinas.nama_lengkap', 'kepala_dinas.nip', 'kepala_dinas.jabatan')
            ->where('id_user', Auth::user()->id)
            ->get();

        }else{
            $index = DB::table('surat_tugas_kepala')
            ->join('tanda_tangan_dokumen', 'surat_tugas_kepala.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->join('kepala_dinas', 'surat_tugas_kepala.nip', '=', 'kepala_dinas.nip')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas_kepala.*', 'kepala_dinas.nama_lengkap', 'kepala_dinas.nip', 'kepala_dinas.jabatan')
            ->get();

        }
        return view('halaman_admin.cetak_surat_tugas_kepala.index', compact('index'));
    }

    public function create()
    {
        return view('halaman_admin.entry_surat_tugas_kepala.tambah');
    }

    public function ajax(Request $request)
    {
        if ($request->ajax()) {
            $output = '';

            $ajax_modal = DB::table('kepala_dinas')->where('nama_lengkap', 'LIKE', '%' . $request->cari . "%")->get();

            $nama = [];
            if ($ajax_modal) {
                foreach ($ajax_modal as $key => $value) {
                    $nama[] = $value;
                }
                return response($nama);
            }
        }
    }

    public function store(suratRequestKepala $request)
    {
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $store = new SuratTugasKepala;

        $store->no_surat_tugas = $request->no_surat_tugas . "" . $request->no_surat_tugas2;
        $store->no_sppd = $request->no_sppd . "" . $request->no_sppd2;
        $store->nip = $request->nip;
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
        return redirect()->route('kelola_surattugas_kepala');
    }

    public function edit($id)
    {
        $edit = DB::table('surat_tugas_kepala')
            ->join('tanda_tangan_dokumen', 'surat_tugas_kepala.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->join('kepala_dinas', 'surat_tugas_kepala.nip', '=', 'kepala_dinas.nip')
            ->where('surat_tugas_kepala.id', $id)
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'tanda_tangan_dokumen.id as id_dokumen', 'surat_tugas_kepala.*', 'kepala_dinas.*', 'surat_tugas_kepala.id as id_surat_tugas')
            ->first();

        $no_tugas = $edit->no_surat_tugas;
        $edit->surat_tugas = explode("/", $no_tugas)[0];

        return view('halaman_admin.entry_surat_tugas_kepala.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $update = SuratTugasKepala::find($request->id);

        $update->no_surat_tugas = $request->no_surat_tugas . "" . $request->no_surat_tugas2;
        $update->no_sppd = $request->no_sppd . "" . $request->no_sppd2;
        $update->nip = $request->nip;
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
        return redirect()->route('kelola_surattugas_kepala');
    }

    public function delete($id)
    {
        $del = SuratTugasKepala::find($id);
        $del->delete();

        Alert::success('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('kelola_surattugas_kepala');
    }
}
