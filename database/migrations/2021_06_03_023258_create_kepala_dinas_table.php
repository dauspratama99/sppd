<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepalaDinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepala_dinas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('golongan');
            $table->string('pangkat');
            $table->string('unit');
            $table->enum('tingkat_biaya', ['A', 'B', 'C', 'D', 'E', 'F']);
            $table->text('foto');
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
        Schema::dropIfExists('kepala_dinas');
    }
}
