<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTugasKepalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_tugas_kepala', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat_tugas');
            $table->string('no_sppd');
            $table->string('nip');
            $table->date('tanggal');
            $table->date('tanggal_berangkat');
            $table->date('tanggal_kembali');
            $table->string('selama');
            $table->string('alat_angkutan');
            $table->string('tempat_berangkat');
            $table->string('tempat_tujuan');
            $table->string('dasar_surat');
            $table->string('uraian');
            $table->text('sumber_anggaran');
            $table->date('mulai_berlaku');
            $table->integer('tanda_tangan_dokumen_id');
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
        Schema::dropIfExists('surat_tugas_kepala');
    }
}
