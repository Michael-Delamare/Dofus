<?php

namespace Database\Seeders;

use App\Models\Information_portail;
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
       $this->call([
           UsersSeeder::class,
           PortailsSeeder::class,
           ServeurSeeder::class,
           Information_portailSeeder::class,

       ]);
    }
}
