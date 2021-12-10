<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpjController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TipeUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBiayaController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\SpjKepalaController;
use App\Http\Controllers\KelolaAkunController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\UangHarianController;
use App\Http\Controllers\KepalaDinasController;
use App\Http\Controllers\ProgramKerjaCotroller;
use App\Http\Controllers\SuratTugasKepalaController;
use App\Http\Controllers\BiayaRepresentasiController;
use App\Http\Controllers\ProgramKerjaKepalaCotroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['belum_login']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('/');
    Route::POST('proses_login', [DashboardController::class, 'proses_login'])->name('proses_login');
});

Route::group(['middleware' => ['sudah_login']], function () {

    Route::POST('logout', [DashboardController::class, 'logout'])->name('logout');

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('admin', [AdminController::class, 'admin'])->name('admin');
    });
    Route::group(['middleware' => ['cek_login:kwitansi']], function () {
        Route::get('kwitansi', [AdminController::class, 'kwitansi'])->name('kwitansi');
    });
    Route::group(['middleware' => ['cek_login:surat_tugas']], function () {
        Route::get('surat_tugas', [AdminController::class, 'surat_tugas'])->name('surat_tugas');
    });



    Route::prefix('kelola_akun')->group(function () {
        Route::get('index', [KelolaAkunController::class, 'index'])->name('kelola_akun');
        Route::get('tambah', [KelolaAkunController::class, 'create'])->name('akun_tambah');
        Route::POST('tambah', [KelolaAkunController::class, 'store'])->name('proses_akun_tambah');
        Route::get('edit/{id}', [KelolaAkunController::class, 'edit'])->name('akun_edit');
        Route::POST('edit/{id}', [KelolaAkunController::class, 'update'])->name('proses_akun_edit');
        Route::DELETE('delete/{id}', [KelolaAkunController::class, 'destroy'])->name('akun_delete');
    });

    Route::prefix('user_tipe')->group(function () {
        Route::get('/index', [TipeUserController::class, 'index'])->name('user_tipe');


    });


    Route::prefix('kelola_pegawai')->group(function () {
        Route::get('index', [PegawaiController::class, 'index'])->name('kelola_pegawai');
        Route::get('tambah', [PegawaiController::class, 'create'])->name('pegawai_tambah');
        Route::POST('ajax', [PegawaiController::class, 'ajax'])->name('ajax_golongan');
        Route::POST('tambah', [PegawaiController::class, 'store'])->name('proses_pegawai_tambah');
        Route::get('edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai_edit');
        Route::POST('edit/{id}', [PegawaiController::class, 'update'])->name('proses_pegawai_edit');
        Route::DELETE('delete/{id}', [PegawaiController::class, 'destroy'])->name('pegawai_delete');
    });

    Route::prefix('kelola_kepala_dinas')->group(function () {
        Route::get('index', [KepalaDinasController::class, 'index'])->name('kelola_kepala_dinas');
        Route::get('tambah', [KepalaDinasController::class, 'create'])->name('kepala_dinas_tambah');
        Route::POST('ajax', [KepalaDinasController::class, 'ajax'])->name('ajax_golongan_kepala_dinas');
        Route::POST('tambah', [KepalaDinasController::class, 'store'])->name('proses_kepala_dinas_tambah');
        Route::get('edit/{id}', [KepalaDinasController::class, 'edit'])->name('kepala_dinas_edit');
        Route::POST('edit/{id}', [KepalaDinasController::class, 'update'])->name('proses_kepala_dinas_edit');
        Route::DELETE('delete/{id}', [KepalaDinasController::class, 'destroy'])->name('kepala_dinas_delete');
    });

    Route::prefix('kelola_dokumen')->group(function () {
        Route::get('index', [DokumenController::class, 'index'])->name('kelola_dokument');
        Route::get('tambah', [DokumenController::class, 'create'])->name('dokument_tambah');
        Route::POST('ajax', [DokumenController::class, 'ajax'])->name('ajax_dokument');
        Route::POST('tambah', [DokumenController::class, 'store'])->name('proses_dokument_tambah');
        Route::get('edit/{id}', [DokumenController::class, 'edit'])->name('dokument_edit');
        Route::POST('edit/{id}', [DokumenController::class, 'update'])->name('proses_dokument_edit');
        Route::DELETE('delete/{id}', [DokumenController::class, 'destroy'])->name('dokument_delete');
    });

    Route::prefix('dasar_peraturan')->group(function () {
        Route::get('index', [PeraturanController::class, 'index'])->name('kelola_peraturan');
        Route::get('edit/{id}', [PeraturanController::class, 'edit'])->name('peraturan_edit');
        Route::POST('edit/{id}', [PeraturanController::class, 'update'])->name('proses_peraturan_edit');
        Route::DELETE('delete/{id}', [PeraturanController::class, 'destroy'])->name('peraturan_delete');
    });

    Route::prefix('surat_tugas')->group(function () {
        Route::get('index', [SuratTugasController::class, 'index'])->name('kelola_surattugas');
        Route::get('cetaksurattugas', [SuratTugasController::class, 'cetak'])->name('cetak_surattugas');
        Route::get('tambah', [SuratTugasController::class, 'create'])->name('surattugas_tambah');
        Route::POST('tambah', [SuratTugasController::class, 'store'])->name('proses_surattugas_tambah');
        Route::get('edit/{id}', [SuratTugasController::class, 'edit'])->name('surattugas_edit');
        Route::POST('edit/{id}', [SuratTugasController::class, 'update'])->name('proses_surattugas_edit');
        Route::DELETE('hapus/{id}', [SuratTugasController::class, 'delete'])->name('surattugas_hapus');
    });

    Route::prefix('surat_tugas_kepala')->group(function () {
        Route::get('index', [SuratTugasKepalaController::class, 'index'])->name('kelola_surattugas_kepala');
        Route::get('cetaksurattugaskepala', [SuratTugasKepalaController::class, 'cetak'])->name('cetak_surattugas_kepala');
        Route::get('tambah', [SuratTugasKepalaController::class, 'create'])->name('surattugaskepala_tambah');
        Route::POST('tambah', [SuratTugasKepalaController::class, 'store'])->name('proses_surattugaskepala_tambah');
        Route::POST('ajax', [SuratTugasKepalaController::class, 'ajax'])->name('ajax_modal');
        Route::get('edit/{id}', [SuratTugasKepalaController::class, 'edit'])->name('surattugaskepala_edit');
        Route::POST('edit/{id}', [SuratTugasKepalaController::class, 'update'])->name('proses_surattugaskepala_edit');
        Route::DELETE('hapus/{id}', [SuratTugasKepalaController::class, 'delete'])->name('surattugaskepala_hapus');
    });

    Route::prefix('spj')->group(function () {
        Route::get('index', [SpjController::class, 'index'])->name('kelola_spj');
        Route::get('cetak_spj', [SpjController::class, 'cetak'])->name('spj_cetak');
        Route::get('cetak_spj2/{id}', [SpjController::class, 'cetak2'])->name('spj_cetak2');
        Route::get('get_spj_staff', [SpjController::class, 'get_spj_staff'])->name('get_spj_staff');
        Route::post('cek_sppd', [SpjController::class, 'cek_sppd'])->name('cek_sppd');
        Route::post('get_biaya', [SpjController::class, 'get_biaya'])->name('get_biaya');
        Route::post('get_kegiatan', [SpjController::class, 'get_kegiatan'])->name('get_kegiatan');
        Route::post('get_representase', [SpjController::class, 'get_representase'])->name('get_representase');
        Route::get('tambah', [SpjController::class, 'create'])->name('spj_tambah');
        Route::POST('tambah', [SpjController::class, 'store'])->name('proses_spj_tambah');
        Route::get('edit/{id}', [SpjController::class, 'edit'])->name('spj_edit');
        Route::POST('edit/{id}', [SpjController::class, 'update'])->name('proses_spj_edit');
        Route::DELETE('hapus/{id}', [SpjController::class, 'delete'])->name('spj_delete');
        Route::GET('exportspj/{jenis_perjalanan?}', [SpjController::class, 'export'])->name('export_spj');
        // Route::POST('tambah', [SuratTugasController::class, 'store'])->name('surattugas_tambah');
        // Route::get('edit/{id}', [SuratTugasController::class, 'edit'])->name('surattugas_edit');
        // Route::POST('edit/{id}', [SuratTugasController::class, 'update'])->name('surattugas_edit');
        // Route::DELETE('hapus/{id}', [SuratTugasController::class, 'delete'])->name('surattugas_hapus');
    });

    Route::prefix('spjkepala')->group(function () {
        Route::get('index', [SpjKepalaController::class, 'index'])->name('kelola_spj_kepala');
        Route::get('cetak', [SpjKepalaController::class, 'cetak'])->name('cetak_kepala_dinas');
        Route::get('cetak2/{id}', [SpjKepalaController::class, 'cetak2'])->name('cetak_kepala_dinas2');
        Route::get('get_spj_kepala', [SpjKepalaController::class, 'get_spj_kepala'])->name('get_spj_kepala');
        Route::post('cek_sppd_kepala', [SpjKepalaController::class, 'cek_sppd_kepala'])->name('cek_sppd_kepala');
        Route::post('get_biaya_kepala', [SpjKepalaController::class, 'get_biaya_kepala'])->name('get_biaya_kepala');
        Route::post('get_kegiatan_kepala', [SpjKepalaController::class, 'get_kegiatan_kepala'])->name('get_kegiatan_kepala');
        Route::post('get_representase_kepala', [SpjKepalaController::class, 'get_representase_kepala'])->name('get_representase_kepala');
        Route::get('tambah', [SpjKepalaController::class, 'create'])->name('spj_kepala_tambah');
        Route::POST('tambah', [SpjKepalaController::class, 'store'])->name('proses_spj_kepala_tambah');
        Route::get('edit/{id}', [SpjKepalaController::class, 'edit'])->name('spj_kepala_edit');
        Route::POST('edit/{id}', [SpjKepalaController::class, 'update'])->name('proses_spj_kepala_edit');
        Route::DELETE('hapus/{id}', [SpjKepalaController::class, 'delete'])->name('spj_kepala_delete');
        Route::GET('exportspjkepaladinas/{jenis_perjalanan?}', [SpjKepalaController::class, 'export'])->name('export_spj_kepala_dinas');
        // Route::POST('tambah', [SuratTugasController::class, 'store'])->name('surattugas_tambah');
        // Route::get('edit/{id}', [SuratTugasController::class, 'edit'])->name('surattugas_edit');
        // Route::POST('edit/{id}', [SuratTugasController::class, 'update'])->name('surattugas_edit');
        // Route::DELETE('hapus/{id}', [SuratTugasController::class, 'delete'])->name('surattugas_hapus');
    });

    Route::prefix('cetak')->group(function () {
        Route::get('cetak/{id}', [CetakController::class, 'surat'])->name('cetak_surat');
        Route::get('cetak_staf/{id}', [CetakController::class, 'surat_staf'])->name('cetak_surat_staf');
        Route::get('cetak2/{id}', [CetakController::class, 'surat2'])->name('cetak_surat2');
        Route::get('cetak_staf2/{id}', [CetakController::class, 'surat_staf2'])->name('cetak_surat_staf2');
    });

    Route::prefix('detail')->group(function () {
        Route::get('tambah/{id}', [DetailController::class, 'create'])->name('detail_tambah');
        Route::POST('tambah/{id}', [DetailController::class, 'store'])->name('proses_detail_tambah');
        Route::get('detail/{id}', [DetailController::class, 'detail'])->name('detail_surat');
        Route::get('/detail/delete/{id}', [DetailController::class, "delete"])->name("detail_delete");
    });

    Route::prefix('program_kegiatan')->group(function () {
        Route::get('index', [ProgramKerjaCotroller::class, 'index'])->name('program_kerja');
        Route::get('tambah', [ProgramKerjaCotroller::class, 'create'])->name('program_tambah');
        Route::POST('tambah', [ProgramKerjaCotroller::class, 'store'])->name('proses_program_tambah');
        Route::get('edit/{id}', [ProgramKerjaCotroller::class, 'edit'])->name('program_edit');
        Route::POST('edit/{id}', [ProgramKerjaCotroller::class, 'update'])->name('proses_program_edit');
        Route::DELETE('hapus/{id}', [ProgramKerjaCotroller::class, 'destroy'])->name('program_hapus');
    });

    Route::prefix('program_kegiatan_kepala')->group(function () {
        Route::get('index', [ProgramKerjaKepalaCotroller::class, 'index'])->name('program_kerja_kepala');
        Route::get('tambah', [ProgramKerjaKepalaCotroller::class, 'create'])->name('program_kepala_tambah');
        Route::POST('tambah', [ProgramKerjaKepalaCotroller::class, 'store'])->name('proses_program_kepala_tambah');
        Route::get('edit/{id}', [ProgramKerjaKepalaCotroller::class, 'edit'])->name('program_kepala_edit');
        Route::POST('edit/{id}', [ProgramKerjaKepalaCotroller::class, 'update'])->name('proses_program_kepala_edit');
        Route::DELETE('hapus/{id}', [ProgramKerjaKepalaCotroller::class, 'destroy'])->name('program_kepala_hapus');
    });

    Route::prefix('data_biaya')->group(function () {
        Route::get('transportasi', [DataBiayaController::class, 'index'])->name('biaya_transportasi');
        Route::get('transportasi_bandara/{id}', [DataBiayaController::class, 'bandara_edit'])->name('bandara_edit');
        Route::POST('transportasi_bandara/{id}', [DataBiayaController::class, 'bandara_update'])->name('proses_bandara_edit');
        Route::get('transportasi_terminal/{id}', [DataBiayaController::class, 'terminal_edit'])->name('terminal_edit');
        Route::POST('transportasi_terminal/{id}', [DataBiayaController::class, 'terminal_update'])->name('proses_terminal_edit');
    });

    Route::prefix('biaya_hotel')->group(function () {
        Route::get('hotel', [DataBiayaController::class, 'hotel'])->name('biaya_hotel');
        Route::get('hotel/{id}', [DataBiayaController::class, 'hotel_edit'])->name('hotel_edit');
        Route::POST('hotel/{id}', [DataBiayaController::class, 'hotel_update'])->name('proses_hotel_edit');
    });

    Route::prefix('uang_harian')->group(function () {
        Route::get('uang_harian', [UangHarianController::class, 'index'])->name('uang_harian');
        Route::get('uang_dalam/{id}', [UangHarianController::class, 'uang_dalam_edit'])->name('uang_dalam');
        Route::POST('uang_dalam/{id}', [UangHarianController::class, 'uang_dalam_update'])->name('proses_uang_dalam');
        Route::get('uang_luar/{id}', [UangHarianController::class, 'uang_luar_edit'])->name('uang_luar');
        Route::POST('uang_luar/{id}', [UangHarianController::class, 'uang_luar_update'])->name('proses_uang_luar');
    });

    Route::prefix('biaya_representasi')->group(function () {
        Route::get('biaya', [BiayaRepresentasiController::class, 'biaya_represantasi'])->name('biaya_represantasi');
        Route::get('biaya_edit/{id}', [BiayaRepresentasiController::class, 'represantasi_edit'])->name('represantasi_edit');
        Route::POST('biaya_edit/{id}', [BiayaRepresentasiController::class, 'represantasi_update'])->name('represantasi_update');
    });


});
