<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'nama' => 'Admin',
                'username' => 'admin',
                'password' => Hash::make('admin12345'),
                'status' => 'admin',
                'alamat' => 'Indonesia',
                'nomor_hp' => '08123456',
            ]
        );
    }
}
