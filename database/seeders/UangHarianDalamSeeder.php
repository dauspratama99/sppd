<?php

namespace Database\Seeders;

use App\Models\UangHarianDalam;
use Illuminate\Database\Seeder;

class UangHarianDalamSeeder extends Seeder
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
                'provinsi' => 'Seluruh Kabupaten dan/atau Dalam Kota',
                'harga' => 410000
            ],
        ];

        UangHarianDalam::insert($provinsi);
    }
}
