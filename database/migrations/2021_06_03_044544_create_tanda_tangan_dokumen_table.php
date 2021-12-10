<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTandaTanganDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanda_tangan_dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('golongan');
            $table->string('pangkat');
            $table->string('status_jabatan');
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
        Schema::dropIfExists('tanda_tangan_dokumen');
    }
}
