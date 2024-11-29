<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Gabriel Mendes',
            'email' => 'gabriel@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // Substituir pela senha criptografada
            'created_at' => now(),
            'updated_at' => now(),
            'lvl' => 'adm',
        ]);

        User::create([
            'name' => 'Fabricyo',
            'email' => 'fabricyo@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // Substituir pela senha criptografada
            'created_at' => now(),
            'updated_at' => now(),
            'lvl' => 'adm',
        ]);

        User::create([
            'name' => 'Jane',
            'email' => 'jane@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // Substituir pela senha criptografada
            'created_at' => now(),
            'updated_at' => now(),
            'lvl' => 'adm',
        ]);
    }
}
