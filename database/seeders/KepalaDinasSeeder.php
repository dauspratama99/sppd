<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KepalaDinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kepala_dinas')->insert(
            [
                'nama_lengkap' => 'Nama Kepala Dinas',
                'nip' => 'Nip Kepala Dinas',
                'jabatan' => 'Jabatan Kepala Dinas',
                'golongan' => 'IA',
                'pangkat' => 'Pangkat Kepala Dinas',
                'unit' => 'Unit Kepala Dinas',
                'tingkat_biaya' => 'A',
                'foto' => '',
            ]
        );
    }
}
