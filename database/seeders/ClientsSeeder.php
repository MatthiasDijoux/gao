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
                'nom' => 'Cage',
                'prenom' => 'Denis'
            ],
            [
                'nom' => 'Golaux',
                'prenom' => 'Henry'
            ],
            [
                'nom' => 'Thé',
                'prenom' => 'Pierrot'
            ],
            [
                'nom' => 'Cement',
                'prenom' => 'Mamadou'
            ],
            [
                'nom' => 'Pette',
                'prenom' => 'Bertrand'
            ]
        ];

        DB::table('clients')->insert($array);
    }
}
