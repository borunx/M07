<?php

namespace Database\Seeders;
use App\Models\Rol;
use App\Models\Tournament;
use App\Models\User;
use App\Models\UserTournament;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Rol::factory(2)
        ->sequence(
            [
                'rol_name'    => 'admin',
                'description' => 'Usuario Administrador'
            ],
            [
                'rol_name'    => 'client',
                'description' => 'Usuario Cliente'
            ],
        ) 
        ->create();

        Tournament::factory(10)->create();
        
        User::factory(10)->create();

        UserTournament::factory(10)->create();
    }
}
