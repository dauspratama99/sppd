<?php

namespace Database\Seeders;

use App\Models\Peraturan;
use Illuminate\Database\Seeder;

class DasarPeraturanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aturandaerah = new Peraturan;
        $aturandaerah->kategori = "Peraturan Daerah";
        $aturandaerah->deskripsi = "Deskripsi Peraturan Daerah";
        $aturandaerah->save();

        $aturangubernur = new Peraturan;
        $aturangubernur->kategori = "Peraturan Gubernur";
        $aturangubernur->deskripsi = "Deskripsi Peraturan Gubernur";
        $aturangubernur->save();

        $aturanstandar = new Peraturan;
        $aturanstandar->kategori = "Pergub Standar Harga Satuan";
        $aturanstandar->deskripsi = "Deskripsi Pergub Standar Harga Satuan";
        $aturanstandar->save();
    }
}
