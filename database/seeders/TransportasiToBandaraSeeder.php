<?php

namespace Database\Seeders;

use App\Models\TransportasiToBandara;
use Illuminate\Database\Seeder;

class TransportasiToBandaraSeeder extends Seeder
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
                'satuan' => 'Org/Kali',
                'besaran' => 123000
            ],
            [
                'provinsi' => 'SUMATERA UTARA',
                'satuan' => 'Org/Kali',
                'besaran' => 232000
            ],
            [
                'provinsi' => 'RIAU',
                'satuan' => 'Org/Kali',
                'besaran' => 94000
            ],
            [
                'provinsi' => 'KEPULAUAN RIAU',
                'satuan' => 'Org/Kali',
                'besaran' => 137000
            ],
            [
                'provinsi' => 'JAMBI',
                'satuan' => 'Org/Kali',
                'besaran' => 147000
            ],
            [
                'provinsi' => 'SUMATERA BARAT',
                'satuan' => 'Org/Kali',
                'besaran' => 190000
            ],
            [
                'provinsi' => 'SUMATERA SELATAN',
                'satuan' => 'Org/Kali',
                'besaran' => 128000
            ],
            [
                'provinsi' => 'LAMPUNG',
                'satuan' => 'Org/Kali',
                'besaran' => 167000
            ],
            [
                'provinsi' => 'BENGKULU',
                'satuan' => 'Org/Kali',
                'besaran' => 109000
            ],
            [
                'provinsi' => 'BANGKA BELITUNG',
                'satuan' => 'Org/Kali',
                'besaran' => 90000
            ],
            [
                'provinsi' => 'BANTEN',
                'satuan' => 'Org/Kali',
                'besaran' => 446000
            ],
            [
                'provinsi' => 'JAWA BARAT',
                'satuan' => 'Org/Kali',
                'besaran' => 166000
            ],
            [
                'provinsi' => 'D.K.I JAKARTA',
                'satuan' => 'Org/Kali',
                'besaran' => 256000
            ],
            [
                'provinsi' => 'JAWA TENGAH',
                'satuan' => 'Org/Kali',
                'besaran' => 75000
            ],
            [
                'provinsi' => 'D.I YOGYAKARTA',
                'satuan' => 'Org/Kali',
                'besaran' => 118000
            ],
            [
                'provinsi' => 'JAWA TIMUR',
                'satuan' => 'Org/Kali',
                'besaran' => 194000
            ],
            [
                'provinsi' => 'BALI',
                'satuan' => 'Org/Kali',
                'besaran' => 159000
            ],
            [
                'provinsi' => 'NUSA TENGGARA BARAT',
                'satuan' => 'Org/Kali',
                'besaran' => 231000
            ],
            [
                'provinsi' => 'NUSA TENGGARA TIMUR',
                'satuan' => 'Org/Kali',
                'besaran' => 108000
            ],
            [
                'provinsi' => 'KALIMANTAN BARAT',
                'satuan' => 'Org/Kali',
                'besaran' => 135000
            ],
            [
                'provinsi' => 'KALIMANTAN TENGAH',
                'satuan' => 'Org/Kali',
                'besaran' => 111000
            ],
            [
                'provinsi' => 'KALIMANTAN SELATAN',
                'satuan' => 'Org/Kali',
                'besaran' => 150000
            ],
            [
                'provinsi' => 'KALIMANTAN TIMUR',
                'satuan' => 'Org/Kali',
                'besaran' => 450000
            ],
            [
                'provinsi' => 'KALIMANTAN UTARA',
                'satuan' => 'Org/Kali',
                'besaran' => 102000
            ],
            [
                'provinsi' => 'SULAWESI UTARA',
                'satuan' => 'Org/Kali',
                'besaran' => 138000
            ],
            [
                'provinsi' => 'GORONTALO',
                'satuan' => 'Org/Kali',
                'besaran' => 240000
            ],
            [
                'provinsi' => 'SULAWESI BARAT',
                'satuan' => 'Org/Kali',
                'besaran' => 165000
            ],
            [
                'provinsi' => 'SULAWESI SELATAN',
                'satuan' => 'Org/Kali',
                'besaran' => 145000
            ],
            [
                'provinsi' => 'SULAWESI TENGAH',
                'satuan' => 'Org/Kali',
                'besaran' => 165000
            ],
            [
                'provinsi' => 'SULAWESI TENGGARA',
                'satuan' => 'Org/Kali',
                'besaran' => 171000
            ],
            [
                'provinsi' => 'MALUKU',
                'satuan' => 'Org/Kali',
                'besaran' => 240000
            ],
            [
                'provinsi' => 'MALUKU UTARA',
                'satuan' => 'Org/Kali',
                'besaran' => 215000
            ],
            [
                'provinsi' => 'PAPUA',
                'satuan' => 'Org/Kali',
                'besaran' => 431000
            ],
            [
                'provinsi' => 'PAPUA BARAT',
                'satuan' => 'Org/Kali',
                'besaran' => 182000
            ],
        ];

        TransportasiToBandara::insert($provinsi);
    }
}
