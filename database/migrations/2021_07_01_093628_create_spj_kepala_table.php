<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpjKepalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spj_kepala', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('no_sppd');
            $table->string('nama_lengkap');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('pangkat');
            $table->string('golongan');
            $table->string('unit');
            $table->string('tingkat_biaya');
            $table->date('tanggal_berangkat');
            $table->date('tanggal_kembali');
            $table->string('selama');
            $table->string('tinggal_to_bandara_terminal');
            $table->string('bandara_terminal_to_tujuan');
            $table->string('tujuan_bandara_terminal');
            $table->string('bandara_terminal_tinggal');
            $table->string('biaya_hotel');
            $table->string('belanja_bbm');
            $table->string('transport_pp');
            $table->string('medical_checkup');
            $table->string('total_riil');
            $table->string('uang_harian');
            $table->string('biaya_transportasi_darat');
            $table->string('biaya_tiket_pesawat');
            $table->string('biaya_bahan_bakar');
            $table->string('biaya_penginapan');
            $table->string('biaya_representase');
            $table->string('daftar_pernyataan');
            $table->string('total_perjalanan_dinas');
            $table->string('kode_kegiatan');
            $table->string('nilai_kegiatan');
            $table->string('sisa_nilai_kegiatan');
            $table->string('kode_rekening');
            $table->string('keperluan');
            $table->string('daerah_tujuan');
            $table->string('instansi_tujuan');
            $table->string('keberangkatan_nama_pesawat_ka_bus_kapal_lainnya');
            $table->string('keberangkatan_kode_booking');
            $table->string('keberangkatan_nomor_tiket');
            $table->string('keberangkatan_nomor_seat');
            $table->string('keberangkatan_nomor_flight');
            $table->string('kedatangan_nama_pesawat_ka_bus_kapal_lainnya');
            $table->string('kedatangan_kode_booking');
            $table->string('kedatangan_nomor_tiket');
            $table->string('kedatangan_nomor_seat');
            $table->string('kedatangan_nomor_flight');
            $table->string('nama_hotel');
            $table->string('nomor_kamar');
            $table->string('tgl_checkin');
            $table->string('tgl_checkout');
            $table->string('email');
            $table->string('telp_hotel');
            $table->string('alamat_hotel');
            $table->string('dokumen_pendukung');
            $table->string('jumlah_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spj_kepala');
    }
}
