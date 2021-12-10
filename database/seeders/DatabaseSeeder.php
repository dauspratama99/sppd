<?php

namespace Database\Seeders;

use App\Models\UangHarianDalam;
use App\Models\UangHarianLuar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DasarPeraturanTableSeeder::class,
            AdminSeeder::class,
            TransportasiToBandaraSeeder::class,
            TransportasiToTerminalSeeder::class,
            BiayaHotelSeeder::class,
            UangHarianLuarSeeder::class,
            UangHarianDalamSeeder::class,
            BiayaRepresentasiSeeder::class,
            KepalaDinasSeeder::class
        ]);
    }
}
