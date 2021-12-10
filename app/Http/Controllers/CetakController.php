<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class CetakController extends Controller
{
    public function surat($id)
    {
        $surat = DB::table('surat_tugas')->JOIN('tanda_tangan_dokumen', 'surat_tugas.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')->where('surat_tugas.id', $id)->select('surat_tugas.*', 'tanda_tangan_dokumen.*')->first();

        $pegawai = DB::table('detail_surat')->JOIN('pegawai', 'detail_surat.nip', '=', 'pegawai.nip')->WHERE('detail_surat.surat_tugas_id', $id)->get();
        
         $tipe = DB::table('surat_tugas')->JOIN('users', 'surat_tugas.id_user', '=','users.id' )->JOIN('tipe_user', 'users.id_tipe', '=', 'tipe_user.id_tipe')->where('users.id', Auth::user()->id)->first();

       
        $data = [
            'dasar' => DB::table('dasar_peraturan')->get(),
            'surat' => $surat,
            'tipe' => $tipe,
            'pegawais' => $pegawai
        ];
        return view('halaman_admin.cetak.surat', $data);
    }

    public function surat_staf($id)
    {
        $detail = DB::table('detail_surat')
            ->JOIN('pegawai', 'detail_surat.nip', '=', 'pegawai.nip')->WHERE('detail_surat.surat_tugas_id', $id)
            ->JOIN('surat_tugas', 'detail_surat.surat_tugas_id', '=', 'surat_tugas.id')
            ->JOIN('tanda_tangan_dokumen', 'surat_tugas.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select(
                'pegawai.*',
                'detail_surat.no_sppd',
                'detail_surat.nip',
                'pegawai.*',
                'surat_tugas.*',
                'tanda_tangan_dokumen.nama_lengkap as nm_lengkap',
                'tanda_tangan_dokumen.nip as t_nip',
                'tanda_tangan_dokumen.jabatan as t_jabatan',
                'tanda_tangan_dokumen.status_jabatan as t_status_jabatan',
                'tanda_tangan_dokumen.pangkat as t_pangkat'
            )
            ->get();

        return view('halaman_admin.cetak.surat_staf', [
            "detail_surat" => $detail
        ]);
    }

    public function surat2($id)
    {
        if(Auth::user()->status != 'admin'){
            $surat = DB::table('surat_tugas_kepala')
            ->join('tanda_tangan_dokumen', 'surat_tugas_kepala.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->join('kepala_dinas', 'kepala_dinas.nip', '=', 'surat_tugas_kepala.nip')
            ->where('surat_tugas_kepala.id', $id)->where('id_user', Auth::user()->id)->select(
                'surat_tugas_kepala.*',
                'tanda_tangan_dokumen.*',
                'kepala_dinas.nama_lengkap as nm_lengkap',
                'kepala_dinas.nip as k_nip',
                'kepala_dinas.pangkat as k_pangkat',
                'kepala_dinas.golongan as k_golongan',
                'kepala_dinas.jabatan as k_jabatan'
            )->first();

        $data = [
            'dasar' => DB::table('dasar_peraturan')->get(),
            'surat' => $surat
        ];
        }else{
        $surat = DB::table('surat_tugas_kepala')
            ->join('tanda_tangan_dokumen', 'surat_tugas_kepala.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->join('kepala_dinas', 'kepala_dinas.nip', '=', 'surat_tugas_kepala.nip')
            ->where('surat_tugas_kepala.id', $id)->select(
                'surat_tugas_kepala.*',
                'tanda_tangan_dokumen.*',
                'kepala_dinas.nama_lengkap as nm_lengkap',
                'kepala_dinas.nip as k_nip',
                'kepala_dinas.pangkat as k_pangkat',
                'kepala_dinas.golongan as k_golongan',
                'kepala_dinas.jabatan as k_jabatan'
            )->first();

        $data = [
            'dasar' => DB::table('dasar_peraturan')->get(),
            'surat' => $surat
        ];
    }
        return view('halaman_admin.cetak.surat2', $data);
    }

    public function surat_staf2($id)
    {
        if(Auth::user()->status != 'admin'){
            $detail = DB::table('surat_tugas_kepala')
            ->join('tanda_tangan_dokumen', 'surat_tugas_kepala.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->join('kepala_dinas', 'kepala_dinas.nip', '=', 'surat_tugas_kepala.nip')
            ->where('surat_tugas_kepala.id', $id)
            ->where('id_user', Auth::user()->id)
            ->select('surat_tugas_kepala.*', 'tanda_tangan_dokumen.*', 'kepala_dinas.nama_lengkap as nm_lengkap', 'kepala_dinas.nip as k_nip', 'kepala_dinas.jabatan as k_jabatan', 'kepala_dinas.tingkat_biaya as k_tingkat_biaya', 'kepala_dinas.pangkat as k_pangkat', 'kepala_dinas.golongan as k_golongan')->first();

        }else {
            $detail = DB::table('surat_tugas_kepala')
            ->join('tanda_tangan_dokumen', 'surat_tugas_kepala.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->join('kepala_dinas', 'kepala_dinas.nip', '=', 'surat_tugas_kepala.nip')
            ->where('surat_tugas_kepala.id', $id)
            ->select('surat_tugas_kepala.*', 'tanda_tangan_dokumen.*', 'kepala_dinas.nama_lengkap as nm_lengkap', 'kepala_dinas.nip as k_nip', 'kepala_dinas.jabatan as k_jabatan', 'kepala_dinas.tingkat_biaya as k_tingkat_biaya', 'kepala_dinas.pangkat as k_pangkat', 'kepala_dinas.golongan as k_golongan')->first();

        }

        return view('halaman_admin.cetak.surat_staf2', [
            "detail_surat" => $detail
        ]);
    }
}
