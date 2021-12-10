<?php

namespace Database\Seeders;

use App\Models\UangHarianLuar;
use Illuminate\Database\Seeder;

class UangHarianLuarSeeder extends Seeder
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
                'provinsi' => 'ACEH',
                'harga' => 360000
            ],
            [
                'provinsi' => 'SUMATERA UTARA',
                'harga' => 370000
            ],
            [
                'provinsi' => 'RIAU',
                'harga' => 370000
            ],
            [
                'provinsi' => 'KEPULAUAN RIAU',
                'harga' => 370000
            ],
            [
                'provinsi' => 'JAMBI',
                'harga' => 370000
            ],
            [
                'provinsi' => 'SUMATERA BARAT',
                'harga' => 380000
            ],
            [
                'provinsi' => 'SUMATERA SELATAN',
                'harga' => 380000
            ],
            [
                'provinsi' => 'LAMPUNG',
                'harga' => 380000
            ],
            [
                'provinsi' => 'BENGKULU',
                'harga' => 380000
            ],
            [
                'provinsi' => 'BANGKA BELITUNG',
                'harga' => 410000
            ],
            [
                'provinsi' => 'BANTEN',
                'harga' => 370000
            ],
            [
                'provinsi' => 'JAWA BARAT',
                'harga' => 430000
            ],
            [
                'provinsi' => 'D.K.I JAKARTA',
                'harga' => 530000
            ],
            [
                'provinsi' => 'JAWA TENGAH',
                'harga' => 370000
            ],
            [
                'provinsi' => 'D.I YOGYAKARTA',
                'harga' => 420000
            ],
            [
                'provinsi' => 'JAWA TIMUR',
                'harga' => 410000
            ],
            [
                'provinsi' => 'BALI',
                'harga' => 480000
            ],
            [
                'provinsi' => 'NUSA TENGGARA BARAT',
                'harga' => 440000
            ],
            [
                'provinsi' => 'NUSA TENGGARA TIMUR',
                'harga' => 430000
            ],
            [
                'provinsi' => 'KALIMANTAN BARAT',
                'harga' => 380000
            ],
            [
                'provinsi' => 'KALIMANTAN TENGAH',
                'harga' => 360000
            ],
            [
                'provinsi' => 'KALIMANTAN SELATAN',
                'harga' => 380000
            ],
            [
                'provinsi' => 'KALIMANTAN TIMUR',
                'harga' => 430000
            ],
            [
                'provinsi' => 'KALIMANTAN UTARA',
                'harga' => 430000
            ],
            [
                'provinsi' => 'SULAWESI UTARA',
                'harga' => 370000
            ],
            [
                'provinsi' => 'GORONTALO',
                'harga' => 370000
            ],
            [
                'provinsi' => 'SULAWESI SELATAN',
                'harga' => 430000
            ],
            [
                'provinsi' => 'SULAWESI TENGAH',
                'harga' => 370000
            ],
            [
                'provinsi' => 'SULAWESI TENGGARA',
                'harga' => 380000
            ],
            [
                'provinsi' => 'MALUKU',
                'harga' => 380000
            ],
            [
                'provinsi' => 'MALUKU UTARA',
                'harga' => 430000
            ],
            [
                'provinsi' => 'PAPUA',
                'harga' => 580000
            ],
            [
                'provinsi' => 'PAPUA BARAT',
                'harga' => 480000
            ],
        ];

        UangHarianLuar::insert($provinsi);
    }
}
