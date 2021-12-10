<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipe_user')->insert([
               [
                'user_tipe' => 'User UPT Umum',

                ],
                [
                    'user_tipe' => 'User UPT Perencanaan',

                    ],
                    [
                        'user_tipe' => 'User UPT Akuntansi',

                        ],
                        [
                            'user_tipe' => 'User UPT Aset',

                            ],
                            [
                                'user_tipe' => 'User UPT Aset',

                                ],
                                [
                                    'user_tipe' => 'User UPT Perbendaharaan',

                                    ],
                                    [
                                        'user_tipe' => 'User UPT IT',

                                        ],
                                        [
                                            'user_tipe' => 'User UPT Program',

                                            ]

        ]);
    }
}
