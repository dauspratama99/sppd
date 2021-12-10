<?php

namespace Database\Seeders;

use App\Models\TransportasiToTerminal;
use Illuminate\Database\Seeder;

class TransportasiToTerminalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = [
            [
                'provinsi' => 'SULAWESI BARAT',
                'satuan' => 'Org/Kali',
                'besaran' => 50000
            ],
        ];

        TransportasiToTerminal::insert($provinsi);
    }
}
