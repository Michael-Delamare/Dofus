<?php

namespace Database\Seeders;
use App\Models\Portail;
use Illuminate\Database\Seeder;

class PortailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portail::create([
            'nom'=>'Ecaflipus',
            'image'=>'image/Ecaflipus.png',
            'position'=>'Position inconnue'
        ]);
        Portail::create([
            'nom'=>'Srambad',
            'image'=>'image/Srambad.png',
            'position'=>'Position inconnue'
        ]);
        Portail::create([
            'nom'=>'Enutrosor',
            'image'=>'image/enu.png',
            'position'=>'Position inconnue'
        ]);
        Portail::create([
            'nom'=>'Xelorium',
            'image'=>'image/xel.png',
            'position'=>'Position inconnue'
        ]);

    }
}