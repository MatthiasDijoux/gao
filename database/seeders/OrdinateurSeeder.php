<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdinateurSeeder extends Seeder
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
                'nom' => 'ordinateur 1',
            ],
            [
                'nom' => 'ordinateur 2',
            ],
            [
                'nom' => 'ordinateur 3',
            ],
            [
                'nom' => 'ordinateur 4',
            ],
            [
                'nom' => 'ordinateur 5',
            ]
        ];

        DB::table('ordinateurs')->insert($array);
    }
}
