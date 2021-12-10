<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin()
    {
        $dalam = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Dalam Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_dalam'))
            ->first();

        $luar = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Luar Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_luar'))
            ->first();

        return view('halaman_admin.kelola_akun.dashboard', [
            'dinas_dalam' => $dalam,
            'dinas_luar' => $luar
        ]);
    }

    public function kwitansi()
    {
        $dalam = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Dalam Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_dalam'))
            ->first();

        $luar = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Luar Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_luar'))
            ->first();

        return view('halaman_admin.kelola_akun.dashboard', [
            'dinas_dalam' => $dalam,
            'dinas_luar' => $luar
        ]);
    }

    public function surat_tugas()
    {
        $dalam = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Dalam Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_dalam'))
            ->first();

        $luar = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Luar Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_luar'))
            ->first();

        return view('halaman_admin.kelola_akun.dashboard', [
            'dinas_dalam' => $dalam,
            'dinas_luar' => $luar
        ]);
    }
}
