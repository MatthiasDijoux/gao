<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
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
                'nom' => 'Cage',
                'prenom' => 'Denis'
            ],
            [
                'id' => 2,
                'nom' => 'Golaux',
                'prenom' => 'Henry'
            ],
            [
                'id' => 3,
                'nom' => 'Thé',
                'prenom' => 'Pierrot'
            ],
            [
                'id' => 4,
                'nom' => 'Cement',
                'prenom' => 'Mamadou'
            ],
            [
                'id' => 5,
                'nom' => 'Pette',
                'prenom' => 'Bertrand'
            ]
        ];

        DB::table('clients')->insert($array);
    }
}
