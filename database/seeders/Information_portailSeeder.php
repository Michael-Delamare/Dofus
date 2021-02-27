<?php

namespace Database\Seeders;

use App\Models\Information_portail;
use Illuminate\Database\Seeder;

class Information_portailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information_portail::create([
            'position'=>'-1/50',
            'utilisation'=>'54',
            'serveur_id'=>'1',
            'portail_id'=>'1',
            'users_id'=>'1'
        ]);
        Information_portail::create([
            'position'=>'74/-50',
            'utilisation'=>'80',
            'serveur_id'=>'1',
            'portail_id'=>'2',
            'users_id'=>'1'
        ]);
        Information_portail::create([
            'position'=>'-19/-50',
            'utilisation'=>'114',
            'serveur_id'=>'1',
            'portail_id'=>'3',
            'users_id'=>'1'
        ]);
        Information_portail::create([
            'position'=>'-40/10',
            'utilisation'=>'14',
            'serveur_id'=>'1',
            'portail_id'=>'4',
            'users_id'=>'1'
        ]);
    }
}
