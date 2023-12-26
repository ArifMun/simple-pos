<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'armun',
            'role' => 'superadmin',
            'email' => 'armun@example.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'ardi',
            'role' => 'manager',
            'email' => 'ardi@example.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'anto',
            'role' => 'sales',
            'email' => 'anto@example.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'gunawan',
            'role' => 'purchase',
            'email' => 'gunawan@example.com',
        ]);
    }
}
