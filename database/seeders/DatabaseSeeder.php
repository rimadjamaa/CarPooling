<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'firstname' => 'Test',
            'lastname' => 'User',
            'email' => 'test@example.com',
            'password' => Hash::make('12345678'),
            'genre'=>'femme',
            'phone_number'=>12334555,
            'matricule'=>15,
            'role' => 0,
        ]);
        DB::table('users')->insert([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'genre'=>'femme',
            'phone_number'=>12334555,
            'matricule'=>154,
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'firstname' => 'Driver',
            'lastname' => 'Driver',
            'email' => 'driver@example.com',
            'password' => Hash::make('12345678'),
            'genre'=>'femme',
            'phone_number'=>125,
            'matricule'=>13,
            'role' => 2,
        ]);
    }
}
