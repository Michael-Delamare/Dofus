<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Michael',
            'email'=>'michael111@hotmail.fr',
            'password'=>'charmeds1'
        ]);
    }
}
