<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin')
            ],
        ];

        DB::table('users')->insert($array);
    }
}
