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
                'horaire' => '9',
                'date' => '2020-10-28',
                'id_ordinateurs' => 4,
                'id_clients' => 1

            ],
            [
                'horaire' => '16',
                'date' => '2020-03-25',
                'id_ordinateurs' => 2,
                'id_clients' => 2

            ],
            [
                'horaire' => '13',
                'date' => '2020-06-01',
                'id_ordinateurs' => 3,
                'id_clients' => 4

            ],

            [
                'horaire' => '10',
                'date' => '2020-05-15',
                'id_ordinateurs' => 1,
                'id_clients' => 5
            ],
            [
                'horaire' => '16',
                'date' => '2020-06-01',
                'id_ordinateurs' => 5,
                'id_clients' => 2
            ],
        ];

        DB::table('attributions')->insert($array);
    }
}
