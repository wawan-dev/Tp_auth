<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    // À la fin de la méthode run
    // Création des rôles par défaut de l'application
    Role::create(['name' => 'admin']);
    Role::create(['name' => 'user']);
}
}
