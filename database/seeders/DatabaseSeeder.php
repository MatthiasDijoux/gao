<?php

namespace Database\Seeders;

use App\Models\ClientsModel;
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
        $this->call([OrdinateurSeeder::class]);
        $this->call([ClientsSeeder::class]);
        $this->call([AttributionsSeeder::class]);
        $this->call([UserSeeder::class]);
    }
}
