<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'id' => 1,
                'horaire' => '9',
                'id_ordinateurs' => 4,
                'id_clients' => 1

            ],
            [
                'id' => 2,
                'horaire' => '16',
                'id_ordinateurs' => 2,
                'id_clients' => 2

            ],
            [
                'id' => 3,
                'horaire' => '13',
                'id_ordinateurs' => 3,
                'id_clients' => 4

            ],
            [
                'id' => 4,
                'horaire' => '10',
                'id_ordinateurs' => 1,
                'id_clients' => 5
            ],
        ];

        DB::table('attributions')->insert($array);
    }
}
