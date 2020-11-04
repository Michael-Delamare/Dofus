<?php

namespace Database\Seeders;
use App\Models\Serveur;
use Illuminate\Database\Seeder;

class ServeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serveur::create([
            'nom'=>'Pandore',
            'image'=>'image-serveur.png'
        ]);
        Serveur::create([
            'nom'=>'Ush',
            'image'=>'image-serveur.png'
        ]);
    }
}
