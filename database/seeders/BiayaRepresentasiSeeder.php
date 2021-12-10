<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiayaRepresentasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $representase = [
            [
                'jabatan' => 'Gubernur / Wakil Gubernur dan Pimpinan DPRD',
                'luar_daerah' => 250000,
                'dalam_daerah' => 125000,
            ],
            [
                'jabatan' => 'Eselon I',
                'luar_daerah' => 200000,
                'dalam_daerah' => 100000,
            ],
            [
                'jabatan' => 'Pejabat Eselon II, Anggota DPRD',
                'luar_daerah' => 150000,
                'dalam_daerah' => 75000,
            ],
        ];

        DB::table('biaya_representasi')->insert($representase);
    }
}
