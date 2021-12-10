<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramKerjaKepalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_kerja_kepala', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kegiatan', '50');
            $table->string('nama_kegiatan');
            $table->string('jenis_perjalanan');
            $table->string('nilai', '100');
            $table->string('kode_rekening');
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
        Schema::dropIfExists('program_kerja_kepala');
    }
}
